<?php
/**
 * Basic unit test for Resource Vault CPT registration
 */
class ResourceVaultCPTTest extends WP_UnitTestCase {
    public function test_resource_vault_cpt_registered() {
        $post_type = get_post_type_object('resource_vault');
        $this->assertNotNull($post_type, 'resource_vault CPT should be registered');
        $this->assertTrue($post_type->public, 'resource_vault CPT should be public');
        $this->assertEquals('Resources', $post_type->labels->name);
    }
}
