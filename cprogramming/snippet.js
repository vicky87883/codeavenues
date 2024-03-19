function copyCode() {
            const codeElement = document.querySelector('pre code');
            const codeText = codeElement.textContent;

            const tempInput = document.createElement('textarea');
            tempInput.value = codeText;
            document.body.appendChild(tempInput);
            tempInput.select();
            document.execCommand('copy');
            document.body.removeChild(tempInput);
            alert('Code snippet copied to clipboard!');
	
}