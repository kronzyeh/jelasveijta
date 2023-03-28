import './bootstrap';
<script>
    $(document).ready(function() {
        $('#ingredients').multiselect({
            includeSelectAllOption: true,
            selectAllText: 'Select All',
            enableFiltering: true,
            filterPlaceholder: 'Search',
            maxHeight: 200
        });
    });
</script>
