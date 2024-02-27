function copyValues() {
  const lundiValue = document.querySelector(
    'input.copy-value[type="time"]'
  ).value;
  const timeInputs = document.querySelectorAll('input[type="time"]');
  timeInputs.forEach(function (input) {
    input.value = lundiValue;
  });
}

function copyValuesRepas() {
  const petitDejeuner = document.querySelector(
    'input.copy-petit-dejeuner[type="time"]'
  ).value;
  const dejeuner = document.querySelector(
    'input.copy-dejeuner[type="time"]'
  ).value;
  const dinner = document.querySelector('input.copy-dinner[type="time"]').value;

  const inputsPetitDejeuner = document.querySelectorAll(
    'input.petit-dejeuner[type="time"]'
  );
  const inputsDejeuner = document.querySelectorAll(
    'input.dejeuner[type="time"]'
  );
  const inputsDinner = document.querySelectorAll('input.dinner[type="time"]');

  inputsPetitDejeuner.forEach((input) => {
    input.value = petitDejeuner;
  });

  inputsDejeuner.forEach((input) => {
    input.value = dejeuner;
  });

  inputsDinner.forEach((input) => {
    input.value = dinner;
  });
}

function submitForms(obligationFormId, tempoFormId) {
  document.querySelector("#" + obligationFormId).submit();
  document.querySelector("#" + tempoFormId).submit();
}
