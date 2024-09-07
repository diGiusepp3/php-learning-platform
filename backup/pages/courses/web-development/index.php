<?php
    $pagetitle = "Web Development Course";
    $courseName = "Web Development";

    $navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#html-basics'>$courseName Basics</a></li>
                <li><a href='#css-basics'>CSS Basics</a></li>
                <li><a href='#javascript-basics'>JavaScript Basics</a></li>
                <li><a href='#responsive-design'>Responsive Design</a></li>
                <li><a href='#deployment'>Deployment</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

    $heroContent = "
        <div class='hero-content'>
            <h1>Web Development Course</h1>
            <p>Master the fundamentals of web development and build your first website from scratch.</p>
        </div>
    ";

    include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>


<section id="introduction">
    <div class="container">
        <h2>Introduction to Web Development</h2>
        <p>Web development is the process of creating websites and web applications that are accessible over the internet. It involves both front-end development (what users see) and back-end development (the server-side logic). This course is designed to guide you through the basics of web development, helping you to create your first website from scratch.</p>
    </div>
</section>

<section id="html-basics">
    <div class="container">
        <h2>HTML Basics</h2>
        <p>HTML (HyperText Markup Language) is the standard markup language used to create the structure of web pages. It consists of elements represented by tags that define the different parts of a web page.</p>
        <h3>Key HTML Elements</h3>
        <ul>
            <li><strong><code>&lt;html&gt;&lt;/html&gt;</code></strong>: The root element of an HTML document.</li>
            <li><strong><code>&lt;head&gt;&lt;/head&gt;</code></strong>: Contains meta-information about the document, such as its title and links to stylesheets.</li>
            <li><strong><code>&lt;body&gt;&lt;/body&gt;</code></strong>: Contains the content of the web page, including text, images, and other media.</li>
            <li><strong><code>&lt;h1&gt;&lt;/h1&gt;</code></strong>: Represents a heading. There are six levels of headings, from <code>&lt;h1&gt;</code> (most important) to <code>&lt;h6&gt;</code> (least important).</li>
            <li><strong><code>&lt;p&gt;&lt;/p&gt;</code></strong>: Represents a paragraph of text.</li>
            <li><strong><code>&lt;a&gt;&lt;/a&gt;</code></strong>: Represents a hyperlink to another page or resource.</li>
        </ul>
        <p>Example:</p>
        <pre><code>&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;My First Website&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
    &lt;p&gt;This is my first web page.&lt;/p&gt;
    &lt;a href="https://www.example.com"&gt;Visit Example&lt;/a&gt;
&lt;/body&gt;
&lt;/html&gt;
</code></pre>
    </div>
</section>

<section id="css-basics">
    <div class="container">
        <h2>CSS Basics</h2>
        <p>CSS (Cascading Style Sheets) is used to control the appearance of HTML elements on a web page. It allows you to style your web page by specifying the layout, colors, fonts, and more.</p>
        <h3>Key CSS Concepts</h3>
        <ul>
            <li><strong>Selectors</strong>: Target HTML elements to apply styles to. For example, <code>p</code> selects all paragraphs.</li>
            <li><strong>Properties</strong>: Define what aspect of the element to style, such as <code>color</code> or <code>font-size</code>.</li>
            <li><strong>Values</strong>: Specify the style applied to the property, such as <code>blue</code> or <code>16px</code>.</li>
        </ul>
        <p>Example:</p>
        <pre><code>p {
    color: blue;
    font-size: 16px;
}

h1 {
    text-align: center;
    color: green;
}
</code></pre>
    </div>
</section>

<section id="javascript-basics">
    <div class="container">
        <h2>JavaScript Basics</h2>
        <p>JavaScript is a programming language that allows you to create dynamic and interactive elements on your web page. It is essential for front-end development and can be used for various tasks such as form validation, animations, and responding to user actions.</p>
        <h3>Key JavaScript Concepts</h3>
        <ul>
            <li><strong>Variables</strong>: Used to store data values. For example, <code>let x = 10;</code></li>
            <li><strong>Functions</strong>: Blocks of code designed to perform a particular task. For example, <code>function myFunction() {}</code></li>
            <li><strong>Events</strong>: Actions that can trigger code execution, such as clicks or key presses.</li>
        </ul>
        <p>Example:</p>
        <pre><code>let name = "John Doe";

function greet() {
    alert("Hello, " + name);
}

document.getElementById("myButton").onclick = greet;
</code></pre>
    </div>
</section>

<section id="responsive-design">
    <div class="container">
        <h2>Responsive Design</h2>
        <p>Responsive design ensures that your web page looks good on all devices, from desktops to mobile phones. This is achieved using flexible grids, layouts, and media queries in CSS.</p>
        <h3>Key Responsive Design Concepts</h3>
        <ul>
            <li><strong>Fluid Grids</strong>: Use percentages instead of fixed units for layout widths.</li>
            <li><strong>Flexible Images</strong>: Ensure images resize within their containers using CSS.</li>
            <li><strong>Media Queries</strong>: Apply different styles based on device characteristics like screen width.</li>
        </ul>
        <p>Example:</p>
        <pre><code>@media screen and (max-width: 600px) {
    body {
        background-color: lightblue;
    }
}
</code></pre>
    </div>
</section>

<section id="deployment">
    <div class="container">
        <h2>Deployment</h2>
        <p>Deployment is the process of making your website available to users on the internet. This typically involves purchasing a domain, setting up a hosting service, and uploading your files to a server.</p>
        <h3>Key Deployment Steps</h3>
        <ul>
            <li><strong>Choose a Domain Name:</strong> Select a unique domain name for your website.</li>
            <li><strong>Purchase Hosting:</strong> Choose a hosting provider to store your website's files.</li>
            <li><strong>Upload Your Files:</strong> Use FTP or a web hosting control panel to upload your files to the server.</li>
            <li><strong>Test Your Website:</strong> Ensure your website is live and functioning correctly.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Continue learning and improving your web development skills with these additional resources:</p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Learn" target="_blank">MDN Web Docs</a></li>
            <li><a href="https://www.w3schools.com/" target="_blank">W3Schools</a></li>
            <li><a href="https://www.freecodecamp.org/" target="_blank">freeCodeCamp</a></li>
            <li><a href="https://css-tricks.com/" target="_blank">CSS-Tricks</a></li>
        </ul>
    </div>
</section>

<footer class="text-center py-3">
    <p>&copy; 2024 WebMagic. All Rights Reserved.</p>
    <p><a href="/">Back to Courses</a></p>
</footer>

</body>
</html>
