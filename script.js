document.addEventListener('DOMContentLoaded', function() {
  var mohonButton = document.querySelector('.mohon-button');
  mohonButton.addEventListener('click', function() {
    var selectedCheckboxes = document.querySelectorAll('input[name="selectedData[]"]:checked');
    if (selectedCheckboxes.length > 0) {
      var selectedNoPermohonan = selectedCheckboxes[0].value;
      document.querySelector('input[name="selectedNoPermohonan"]').value = selectedNoPermohonan;
      document.querySelector('#nextPageForm').submit();
    } else {
      alert('Please select at least one data entry.');
    }
  });
});
