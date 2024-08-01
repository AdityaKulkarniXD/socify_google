/* 
Add here your JavaScript Code. 
Note. the code entered here will be added in <head> tag 


	Example: 

	var x, y, z; 
	x = 5; 
	y = 6; 
	z = x + y;

*/
 // Create the link element
    const manifestLink = document.createElement("link");
    manifestLink.rel = "manifest";
    manifestLink.href = "https://spaces.noobsverse.com/manifest.json"; // Replace with the correct path to your manifest file
    
    // Append the link element to the head section
    document.head.appendChild(manifestLink);
  if (typeof navigator.serviceWorker !== 'undefined') {
    navigator.serviceWorker.register('sw.js')
  }
