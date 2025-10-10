document.addEventListener('DOMContentLoaded', function() {
    const deleteModal = document.getElementById('deleteModal');
    
    if (deleteModal) {
        const itemNameElement = document.getElementById('itemNameToDelete');
        const confirmDeleteBtn = document.getElementById('confirmDeleteBtn');
        const deleteItemType = document.getElementById('deleteItemType');
        const deleteItemTypeLabel = document.getElementById('deleteItemTypeLabel');
        
        deleteModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const itemId = button.getAttribute('data-item-id') || button.getAttribute('data-user-id');
            const itemName = button.getAttribute('data-item-name') || button.getAttribute('data-user-name');
            const deleteType = button.getAttribute('data-delete-type') || 'user';
            
            // Update modal content based on type
            if (deleteType === 'product') {
                deleteItemType.textContent = 'product';
                deleteItemTypeLabel.textContent = 'Product';
            } else {
                deleteItemType.textContent = 'user';
                deleteItemTypeLabel.textContent = 'User';
            }
            
            itemNameElement.textContent = itemName;
            
            // Get base URL from meta tag
            const baseUrl = document.querySelector('meta[name="base-url"]')?.content || '';
            confirmDeleteBtn.href = baseUrl + deleteType + 's/delete/' + itemId;
        });
    }
});