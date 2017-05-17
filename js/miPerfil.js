$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 69, // Creates a dropdown of 15 years to control year
    min: new Date(1952, 1, 01),
    max: new Date(2017, 31, 12)
  });