<script src="https://npmcdn.com/flatpickr/dist/flatpickr.min.js"></script>
<script src="https://npmcdn.com/flatpickr/dist/l10n/ja.js"></script>

<script>
  flatpickr(document.getElementById('due_date'), {
    locale: 'js',
    dateformat: "Y/m/d",
    minDate: new Date()
  });
</script>