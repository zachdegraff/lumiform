<div class="template-preview">
    <h1>{{ $template->title }}</h1>

    <div class="scrollable">
    @include("components/template_preview/item", [
        "item" => $template->form,
        "hasMultiplePages" => count($template->form->items) > 1,
        "response_sets" => $template->form->params->response_sets,
    ])
    </div>

    <div class="pagination">
        <button class="prev">@lang('Previous page')</button>
        <button class="next">@lang('Next page')</button>
    </div>
</div>

<script>

function togglePaginationButtons(preview) {
    let totalPages = preview.querySelectorAll('.page').length;
    let currentPage = parseInt(preview.getAttribute('data-current-page'), 10);
    let prevButton = preview.querySelectorAll('.pagination .prev');
    let nextButton = preview.querySelectorAll('.pagination .next');

    prevButton.forEach(function(button) { button.disabled = currentPage === 0; })
    nextButton.forEach(function(button) { button.disabled = currentPage === totalPages -1; })
}

document.querySelectorAll('.template-preview').forEach(function (preview) {
    preview.setAttribute('data-current-page', 0);
    let pages = preview.querySelectorAll('.page');

    pages.forEach(function (page, index) {
        if (index > 0) {
            page.style.display = 'none';
        }
    });
    togglePaginationButtons(preview);



    preview.querySelectorAll('.pagination .prev').forEach(function(button) {
        button.addEventListener('click', function(event) {
            let currentPage = parseInt(preview.getAttribute('data-current-page'), 10);
            pages[currentPage].style.display = 'none';
            currentPage -= 1;
            pages[currentPage].style.display = 'block';
            preview.setAttribute('data-current-page', currentPage);
            togglePaginationButtons(preview);
        })
    });

    preview.querySelectorAll('.pagination .next').forEach(function(button) {
        button.addEventListener('click', function(event) {
            let currentPage = parseInt(preview.getAttribute('data-current-page'), 10);
            pages[currentPage].style.display = 'none';
            currentPage += 1;
            pages[currentPage].style.display = 'block';
            preview.setAttribute('data-current-page', currentPage);
            togglePaginationButtons(preview);
        })
    });
});




</script>
