<?php
//pages/course/lesson/index.php
include $_SERVER['DOCUMENT_ROOT'] . '/includes/ini.inc';
include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<style>

</style>
<h1>HTML Code Validator</h1>
<div id="editor">Type je code hier...</div>
<button onclick="runCode()">Run</button>
<h3>Output:</h3>
<iframe id="output"></iframe>
<h3 id="result"></h3>

<!-- Verwachte output -->
<div id="expected-output">
    <p>Welkom bij HTML!</p>
</div>

<!-- Ace Editor Script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script>
    // Initialiseer Ace Editor
    const editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.session.setMode("ace/mode/html");

    function runCode() {
        // Haal code van gebruiker op
        const userCode = editor.getValue();

        // Voer de code uit in iframe
        const outputFrame = document.getElementById('output').contentWindow.document;
        outputFrame.open();
        outputFrame.write(userCode);
        outputFrame.close();

        // Haal de verwachte output op
        const expectedOutput = document.getElementById('expected-output').innerHTML.trim();

        // Vergelijk de output met de verwachte output
        const userOutput = outputFrame.body.innerHTML.trim();
        const result = (userOutput === expectedOutput) ? "Geslaagd!" : "Probeer opnieuw.";

        // Toon resultaat aan de gebruiker
        document.getElementById('result').textContent = result;
    }
</script>
</body>
</html>
<?php
include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';

