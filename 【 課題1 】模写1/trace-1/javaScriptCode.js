
function onDisplay() {

  const textBoxStrings = document.getElementById("textBox");
  const boxColor = document.getElementById("outPut");

  if (textBoxStrings.value == "赤") {
    boxColor.style.backgroundColor = '#ff0000';
  } else if (textBoxStrings.value == "青") {
    boxColor.style.backgroundColor = '#4169e1';
  } else {
    boxColor.style.backgroundColor = '#006400';
  }
}
