<?php

declare(strict_types=1);

namespace Swaggest\ShopwareSdk\Test\Internal;

use PHPUnit\Framework\TestCase;
use Swaggest\ShopwareSdk\Entity\Category\CategoryCollection;
use Swaggest\ShopwareSdk\Entity\Category\CategoryDefinition;
use Swaggest\ShopwareSdk\Entity\Category\CategoryEntity;
use Swaggest\ShopwareSdk\Entity\EntityCollection;
use Swaggest\ShopwareSdk\Entity\AbstractEntityDefinition;
use Swaggest\ShopwareSdk\Entity\Product\ProductCollection;
use Swaggest\ShopwareSdk\Entity\Product\ProductDefinition;
use Swaggest\ShopwareSdk\Entity\Product\ProductEntity;
use Swaggest\ShopwareSdk\Entity\Tax\TaxEntity;
use Swaggest\ShopwareSdk\Internal\EntityHydrator;
use Swaggest\ShopwareSdk\Uuid\Uuid;

final class EntityHydratorTest extends TestCase
{
    private EntityHydrator $entityHydrator;

    protected function setUp(): void
    {
        $this->entityHydrator = new EntityHydrator();
    }

    /**
     * @dataProvider provideProductData
     */
    public function testHydrateAttributes(array $response, ProductDefinition $entityDefinition, ProductCollection $expected): void
    {
        $productCollection = $this->entityHydrator->hydrateSearchResult($entityDefinition, $response);

        self::assertEquals($expected, $productCollection);
    }

    /**
     * @dataProvider provideCategoryData
     */
    public function testHydrateRelationships(array $response, AbstractEntityDefinition $entityDefinition, EntityCollection $expected): void
    {
        /** @var CategoryCollection $categoryCollection */
        $categoryCollection = $this->entityHydrator->hydrateSearchResult($entityDefinition, $response);

        self::assertEquals(7.0, $categoryCollection->first()?->getProducts()->first()->getTax()->getTaxRate());
    }

    public function provideProductData(): iterable
    {
        $dataset = $this->getDataset('product-dataset-1');

        $product = new ProductEntity();
        $product->setId('db0acac390164ad29b1cba3c8c48b385');
        $product->setVersionId('0fa91ce3e96a4bc2be4bd9ce752c3425');
        $product->setParentId(null);
        $product->setParentVersionId(null);
        $product->setManufacturerId('89a8fefb288e4e5d8a9d65f60be2fd02');
        $product->setProductManufacturerVersionId(null);
        $product->setUnitId(null);
        $product->setTaxId('f9947bbf58cd43b59a4b22f4cec5ef30');
        $product->setCoverId('e43d74ff644b45a38495f23be802c38e');
        $product->setProductMediaVersionId(null);
        $product->setDeliveryTimeId(null);
        $product->setFeatureSetId(null);
        $product->setCanonicalProductId(null);
        $product->setCmsPageId(null);
        $product->setCmsPageVersionId(null);
        $product->setPrice([[
            'currencyId' => 'b7d2554b0ce847cd82f3ac9bd1c0dfca',
            'net' => 357.15966386555,
            'gross' => 425.02,
            'linked' => true,
            'listPrice' => null,
            'percentage' => null,
            'extensions' => [
            ],
        ]]);
        $product->setProductNumber('ffdd344ed870411882ffaa808e9880b6');
        $product->setStock(28);
        $product->setRestockTime(null);
        $product->setAutoIncrement(1415);
        $product->setActive(true);
        $product->setAvailableStock(28);
        $product->setAvailable(true);
        $product->setIsCloseout(false);
        $product->setVariation([]);
        $product->setDisplayGroup('1a8d5af3d22509b987248d5c40f53b07');
        $product->setConfiguratorGroupConfig(null);
        $product->setMainVariantId(null);
        $product->setVariantRestrictions(null);
        $product->setManufacturerNumber(null);
        $product->setEan(null);
        $product->setPurchaseSteps(1);
        $product->setMaxPurchase(null);
        $product->setMinPurchase(1);
        $product->setPurchaseUnit(null);
        $product->setReferenceUnit(null);
        $product->setShippingFree(false);
        $product->setPurchasePrices([[
            'currencyId' => 'b7d2554b0ce847cd82f3ac9bd1c0dfca',
            'net' => 478.19327731092,
            'gross' => 569.05,
            'linked' => true,
            'listPrice' => null,
            'percentage' => null,
            'extensions' => [
            ],
        ]]);
        $product->setMarkAsTopseller(null);
        $product->setWeight(null);
        $product->setWidth(670.0);
        $product->setHeight(175.0);
        $product->setLength(null);
        $product->setReleaseDate(null);
        $product->setRatingAverage(null);
        $product->setCategoryTree([
            'c8505deca25f4ad592bde4520a45de06',
            'e65f8f80d899418f98df4238f2b425cc',
            '8ab3e11e42214e3e8b686f287206a48a',
            '51d7ab4daeda467ca5b3a51bba166dba',
            '2645c66961ad457aa6c46759853fa610',
        ]);
        $product->setPropertyIds([
            '0d731d4b631645b18000ea8600f97af8',
            '0e1454ce6fc44212a229042f2fefb3b7',
            '74e5befaea014913896687380df7d2b6',
            '8802819ce38f4fc2b2e4aefecd8eab83',
            'b25b6705fae4492ea38090891770655f',
            'b311f7e674f549c6ae675049c46bac34',
            'cff3495d034241f18e54f6e74082c751',
            'eceaffe4843e44a898b4fe3d602d7373',
        ]);
        $product->setOptionIds(null);
        $product->setStreamIds([
            '48648160134a450d9c8dfc48ebe7e7a8',
            '4e5ab8e26e4e465c92cfa4bb22bc5cc7',
            '591a9a9ca5bd4170b5418403a78d100e',
            '5c3d6f3115d24036b12b2343d164e179',
            '666b8c649821412992a442295c7358d3',
            '831a6f25581c4f00a49a18dfc3d5345e',
            'a107617fa9a8457e81cf1c2f8f471464',
            'c6d0de3623114430bab857f74d86ee31'
        ]);
        $product->setTagIds(null);
        $product->setCategoryIds([
            '2645c66961ad457aa6c46759853fa610'
        ]);
        $product->setChildCount(0);
        $product->setCustomFieldSetSelectionActive(null);
        $product->setSales(0);
        $product->setMetaDescription(null);
        $product->setName('Intelligent Marble Fish Fingers');
        $product->setKeywords(null);
        $product->setDescription('Porro et minima fuga ut porro. Voluptatibus minus odit rerum quam occaecati quibusdam. Est quia in officia quo occaecati amet. Nesciunt cum et repudiandae. Aut saepe ut nisi aspernatur.');
        $product->setMetaTitle(null);
        $product->setPackUnit(null);
        $product->setPackUnitPlural(null);
        $product->setCustomFields([]);
        $product->setSlotConfig(null);
        $product->setCustomSearchKeywords(null);
        $product->setCheapestPrice([
            'hasRange' => false,
            'variantId' => 'db0acac390164ad29b1cba3c8c48b385',
            'parentId' => 'db0acac390164ad29b1cba3c8c48b385',
            'ruleId' => null,
            'purchase' => null,
            'reference' => null,
            'unitId' => null,
            'price' => [
                [
                    'currencyId' => 'b7d2554b0ce847cd82f3ac9bd1c0dfca',
                    'net' => 357.15966386555,
                    'gross' => 425.02,
                    'linked' => true,
                    'listPrice' => null,
                    'percentage' => null,
                    'extensions' => [
                    ]
                ]
            ],
            'extensions' => [
            ],
        ]);
        $product->setCreatedAt(new \DateTimeImmutable('2022-02-17T18:36:17.858+00:00'));
        $product->setUpdatedAt(new \DateTimeImmutable('2022-02-17T18:43:34.390+00:00'));
        $product->setTranslated([
            'metaDescription' => null,
            'name' => 'Intelligent Marble Fish Fingers',
            'keywords' => null,
            'description' => 'Porro et minima fuga ut porro. Voluptatibus minus odit rerum quam occaecati quibusdam. Est quia in officia quo occaecati amet. Nesciunt cum et repudiandae. Aut saepe ut nisi aspernatur.',
            'metaTitle' => null,
            'packUnit' => null,
            'packUnitPlural' => null,
            'customFields' => [
            ],
            'slotConfig' => null,
            'customSearchKeywords' => null,
        ]);
        $product->setUnit(null);

        $tax = new TaxEntity();
        $tax->setTaxRate(19.0);
        $tax->setName('Standard rate');
        $tax->setPosition(1);
        $tax->setCustomFields(null);
        $tax->setCreatedAt(new \DateTimeImmutable('2022-02-17T18:35:03.209+00:00'));
        $tax->setId('f9947bbf58cd43b59a4b22f4cec5ef30');
        $tax->setProducts(null);
        $tax->setShippingMethods(null);
        $tax->setRules(null);

        $product->setTax($tax);
        $product->setParent(null);
        $product->setChildren(null);
        $product->setDeliveryTime(null);
        $product->setManufacturer(null);
        $product->setCover(null);
        $product->setFeatureSet(null);
        $product->setCmsPage(null);
        $product->setCanonicalProduct(null);
        $product->setPrices(null);
        $product->setMedia(null);
        $product->setCrossSellings(null);
        $product->setCrossSellingAssignedProducts(null);
        $product->setConfiguratorSettings(null);
        $product->setVisibilities(null);
        $product->setSearchKeywords(null);
        $product->setProductReviews(null);
        $product->setMainCategories(null);
        $product->setSeoUrls(null);
        $product->setOrderLineItems(null);
        $product->setWishlists(null);
        $product->setOptions(null);
        $product->setProperties(null);
        $product->setCategories(null);
        $product->setStreams(null);
        $product->setCategoriesRo(null);
        $product->setTags(null);
        $product->setCustomFieldSets(null);
        $product->setTranslations(null);


        $productCollection = new ProductCollection();
        $productCollection->add($product);

        yield [
            $dataset,
            new ProductDefinition(),
            $productCollection
        ];
    }

    public function provideCategoryData(): iterable
    {
        $dataset = $this->getDataset('category-dataset-1');

        $category = new CategoryEntity();
        $category->setId(Uuid::randomHex());

        $categoryCollection = new CategoryCollection();
        $categoryCollection->add($category);

        yield [
            $dataset,
            new CategoryDefinition(),
            $categoryCollection
        ];
    }

    private function getDataset(string $datasetName): array
    {
        return \json_decode(\file_get_contents(__DIR__ . '/../Resources/' . $datasetName . '.json'), true);
    }
}