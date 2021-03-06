<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Books;
use App\Entity\Writers;
use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\ViewRenderer;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ServerRequestInterface;
use Cycle\ORM\Transaction;
use Cycle\ORM\ORMInterface;
use Cycle\ORM;
use Cycle\ORM\Select\Repository;
use Yiisoft\Html\Html;

use Cycle\Schema;
use Spiral\Database;
use Cycle\Annotated;
use Doctrine\Common\Annotations\AnnotationRegistry;


class WriterController
{
    private ViewRenderer $viewRenderer;
    private $dbal;
    private ResponseFactoryInterface $responseFactory;

    public function __construct(ResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function dbSettings () {
        $this->dbal = new Database\DatabaseManager(
            new Database\Config\DatabaseConfig([
                'default'     => 'default',
                'databases'   => [
                    'default' => ['connection' => 'sqlite']
                ],
                'connections' => [
                    'sqlite' => [
                        'driver'  => Database\Driver\SQLite\SQLiteDriver::class,
                        'connection' => 'sqlite:database.db',
                        'username'   => '',
                        'password'   => '',
                    ]
                ]
            ])
        );
        $orm = new ORM\ORM(new ORM\Factory($this->dbal));
        $finder = (new \Symfony\Component\Finder\Finder())->files()->in('./src');
        $classLocator = new \Spiral\Tokenizer\ClassLocator($finder);
        AnnotationRegistry::registerLoader('class_exists');

        $schema = (new Schema\Compiler())->compile(new Schema\Registry($this->dbal), [
            new Schema\Generator\ResetTables(),       // re-declared table schemas (remove columns)
            new Annotated\Embeddings($classLocator),  // register embeddable entities
            new Annotated\Entities($classLocator),    // register annotated entities
            new Annotated\MergeColumns(),             // add @Table column declarations
            new Schema\Generator\GenerateRelations(), // generate entity relations
            new Schema\Generator\ValidateEntities(),  // make sure all entity schemas are correct
            new Schema\Generator\RenderTables(),      // declare table schemas
            new Schema\Generator\RenderRelations(),   // declare relation keys and indexes
            new Annotated\MergeIndexes(),             // add @Table column declarations
            new Schema\Generator\SyncTables(),        // sync table changes to database
            new Schema\Generator\GenerateTypecast(),  // typecast non string columns
        ]);

        return $orm = $orm->withSchema(new ORM\Schema($schema));
    }

    public function add(ServerRequestInterface $request): ResponseInterface
    {
        $id = $request->getAttribute('id', null);
        $name = $request->getAttribute('name', '');
        $bookId = $request->getAttribute('bookId', null);
        $bookName = $request->getAttribute('bookName', '');
        $year = $request->getAttribute('year', '');
        $authorId = $request->getAttribute('authorId', '');

        $writer = new Writers();
        $writer->setId(intval($id));
        $writer->setWriterName($name);
        $book = new Books();
        $book->setId(intval($bookId));
        $book->setBookName($bookName);
        $book->setYear(intval($year));
        $book->setAuthor(intval($authorId));
        $t = new ORM\Transaction($this->dbSettings());
        $t->persist($writer);
        $t->persist($book);
        $t->run();

        return  $this->responseFactory->createResponse();
    }

    public function read(): ResponseInterface
    {
        $writer = $this->dbSettings()->getRepository(Writers::class)->findAll();
        print_r($writer);
        return $this->viewRenderer->render('read');
    }

    public function edit(ServerRequestInterface $request): ResponseInterface
    {
        $id = $request->getAttribute('id', null);
        $name = $request->getAttribute('name', '');

        $writer = $this->dbSettings()->getRepository(Writers::class)->findByPK($id);
        $writer->setWriterName($name);

        $tr = new Transaction($this->dbSettings());
        $tr->persist($writer);
        $tr->run();

        return  $this->responseFactory->createResponse();
    }

    public function delete(ServerRequestInterface $request): ResponseInterface
    {
        $id = $request->getAttribute('id', null);

        $writer = $this->dbSettings()->getRepository(Writers::class)->findByPK($id);

        $tr = new Transaction($this->dbSettings());
        $tr->delete($writer);
        $tr->run();

        return  $this->responseFactory->createResponse();
    }
}
