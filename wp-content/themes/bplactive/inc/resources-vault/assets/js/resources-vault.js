// Resources Vault Frontend JS
(function($){
    $(document).on('click', '.bpl-resource-download', function(e){
        e.preventDefault();
        var resourceId = $(this).data('resource');
        $('#bpl-resource-modal input[name=resource_id]').val(resourceId);
        $('#bpl-resource-modal').fadeIn();
    });
    $(document).on('click', '.bpl-modal-close', function(){
        $('#bpl-resource-modal').fadeOut();
    });
    $('#bpl-gated-download-form').on('submit', function(e){
        e.preventDefault();
        var $form = $(this);
        $.post(bplResourcesVault.ajax_url, $form.serialize() + '&action=bpl_gated_download&nonce=' + bplResourcesVault.nonce, function(resp){
            if(resp.success){
                $form.hide();
                $('.bpl-modal-message').text(resp.data.message).show();
                // Optionally trigger download here
            } else {
                $('.bpl-modal-message').text('Error.').show();
            }
        });
    });
})(jQuery);
