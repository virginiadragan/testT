<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Books;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Yiisoft\DataResponse\DataResponseFactoryInterface;
use Cycle\ORM;
use Cycle\Schema;
use Spiral\Database;
use Cycle\Annotated;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Yii demo API", version="2.0")
 */
class TestController implements MiddlewareInterface
{
    private DataResponseFactoryInterface $responseFactory;
    private $dbal;
    public function __construct(DataResponseFactoryInterface $responseFactory)
    {
        $this->responseFactory = $responseFactory;
    }

    public function getBooks () {
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

    /**
     * @OA\Get(
     *     path="/api/v1/books",
     *     @OA\Response(response="200", description="Get api version")
     * )
     */
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $books = $this->getBooks()->getRepository(Books::class)->findAll();
        return $this->responseFactory->createResponse($books);
    }
}
