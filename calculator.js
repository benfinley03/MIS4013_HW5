var currentInput = '';
var operator = '';
var result = null;

function appendToDisplay(value) {
  currentInput += value;
  document.getElementById('display').value = currentInput;
}

function setOperator(op) {
  if (currentInput !== '') {
    operator = op;
    result = parseFloat(currentInput);
    currentInput = '';
    document.getElementById('display').value = '';
  }
}

function calculate() {
  if (currentInput !== '' && operator !== '') {
    if (operator === '+') {
      result += parseFloat(currentInput);
    } else if (operator === '-') {
      result -= parseFloat(currentInput);
    } else if (operator === '*') {
      result *= parseFloat(currentInput);
    } else if (operator === '/') {
      if (parseFloat(currentInput) !== 0) {
        result /= parseFloat(currentInput);
      } else {
        alert("Cannot divide by zero");
        clearDisplay();
        return;
      }
    }

    document.getElementById('display').value = result;
    currentInput = '';
    operator = '';
  }
}

function clearDisplay() {
  currentInput = '';
  operator = '';
  result = null;
  document.getElementById('display').value = '';
}

function appendDecimal() {
  if (!currentInput.includes('.')) {
    currentInput += '.';
    document.getElementById('display').value = currentInput;
  }
}

}


