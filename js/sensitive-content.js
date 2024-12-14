const blockedClasses = drupalSettings.sensitive_content_checker.blockedClasses;

console.log(drupalSettings);

// If there are no blocked classes, exit early
if (!blockedClasses) {
  console.log('No classes to block.');
}

// Split the classes by comma (assuming they are entered as comma-separated values)
const classesToBlock = blockedClasses.split(',').map(className => className.trim());

// Loop through each class and find elements to block
classesToBlock.forEach(className => {
  const elements = document.querySelectorAll(className);
  
  elements.forEach(el => {
    // Create and append the overlay
    const overlay = document.createElement('div');
    overlay.classList.add('sensitive-overlay');

    const header = document.createElement('h1');
    const description = document.createElement('p');
    const button = document.createElement('button');

    header.innerHTML = 'Content Warning';
    description.innerHTML = 'The content you are trying to view is sensitive.';
    button.innerHTML = 'See Content';

    overlay.appendChild(header);
    overlay.appendChild(description);
    overlay.appendChild(button);

    button.addEventListener('click', function () {
      overlay.style.display = 'none';
    });

    el.appendChild(overlay);
  });
});
