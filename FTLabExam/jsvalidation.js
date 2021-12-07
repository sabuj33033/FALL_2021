function validateForm() {
    var x = document.forms["myForm"]["username"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }