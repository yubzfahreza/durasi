function copyResult() {
    const text = document.getElementById("resultText").innerText;

    navigator.clipboard.writeText(text).then(function() {
        document.getElementById("copyStatus").innerText = "Copied!";
    }).catch(function() {
        document.getElementById("copyStatus").innerText = "Failed to copy!";
    });
}