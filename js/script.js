// credit: http://stackoverflow.com/questions/1238347/php-show-yes-no-confirmation-dialog

function deleteContact(delURL) {
    if (confirm("Are you sure you want to delete this contact?") == true) {
        document.location = delURL;
    }
  }
