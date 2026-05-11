<?php
/**
 * Basic unit test for Resource Categories taxonomy registration
 */
class ResourceCategoriesTaxonomyTest extends WP_UnitTestCase {
    public function test_resource_categories_taxonomy_registered() {
        $taxonomy = get_taxonomy('resource_category');
        $this->assertNotNull($taxonomy, 'resource_category taxonomy should be registered');
        $this->assertTrue($taxonomy->hierarchical, 'resource_category should be hierarchical');
    }
}
