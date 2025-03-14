<script src="https://cdn.tiny.cloud/1/k06mjasdxw94sf67lu87ncdq1yzra3n52i6p6znwh1vklj69/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: '#mytextarea',
    plugins: [
      'a11ychecker', 'accordion', 'advlist', 'anchor', 'autolink', 'autosave',
      'charmap', 'code', 'codesample', 'directionality', 'emoticons', 'exportpdf',
      'exportword', 'fullscreen', 'help', 'image', 'importcss', 'importword',
      'insertdatetime', 'link', 'lists', 'markdown', 'math', 'media', 'nonbreaking',
      'pagebreak', 'preview', 'quickbars', 'save', 'searchreplace', 'table',
      'visualblocks', 'visualchars', 'wordcount'
    ],
    toolbar: 'undo redo | accordion accordionremove | ' +
      'importword exportword exportpdf | math | ' +
      'blocks fontfamily fontsize | bold italic underline strikethrough | ' +
      'align numlist bullist | link image | table media | ' +
      'lineheight outdent indent | forecolor backcolor removeformat | ' +
      'charmap emoticons | code fullscreen preview | save print | ' +
      'pagebreak anchor codesample | ltr rtl',
    menubar: 'file edit view insert format tools table help'
  });
</script>

<h1>TinyMCE Quick Start Guide</h1>
<form method="post">
  <textarea id="mytextarea">Hello, World!</textarea>
</form>