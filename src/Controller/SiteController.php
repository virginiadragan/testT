<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Books;
use Psr\Http\Message\ResponseInterface;
use Yiisoft\Yii\View\ViewRenderer;
use Cycle\ORM\Transaction;
use Cycle\ORM\ORMInterface;
use Cycle\ORM;
use Cycle\ORM\Select\Repository;

use Cycle\Schema;
use Spiral\Database;
use Cycle\Annotated;
use Doctrine\Common\Annotations\AnnotationRegistry;


class SiteController
{
    private ViewRenderer $viewRenderer;
    private $dbal;

    public function __construct(ViewRenderer $viewRenderer)
    {
        $this->viewRenderer = $viewRenderer->withControllerName('site');
    }

    public function index(): ResponseInterface
    {
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
        $orm = $orm->withSchema(new ORM\Schema($schema));

        $u = $orm->getRepository(Books::class)->findAll();

//        $book = new Books();
//        $book->setBookName('test book');
//        $book->setId(3);
//        $book->setYear(1998);
//        $t = new ORM\Transaction($orm);
//        $t->persist($book);
//        $t->run();
        return $this->viewRenderer->render('index', ['books' => $u]);
    }
}
