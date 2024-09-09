function restrictInput(input) {
  input.addEventListener('keydown', (event) => {
    const key = event.key;
    if (key === 'Backspace' || key === 'Delete') {
      return;
    }
    if (!/^[0-9]+$/.test(key)) {
      event.preventDefault();
    }
  });
}

restrictInput(document.getElementById('contrasena'));