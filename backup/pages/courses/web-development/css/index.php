<?php
$pagetitle = "CSS Course";
$courseName = "CSS";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#css-basics'>$courseName Basics</a></li>
                <li><a href='#selectors'>Selectors</a></li>
                <li><a href='#box-model'>Box Model</a></li>
                <li><a href='#layout'>Layout Techniques</a></li>
                <li><a href='#responsive-design'>Responsive Design</a></li>
                <li><a href='#best-practices'>Best Practices</a></li>
                <li><a href='#additional-resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>CSS Course</h1>
            <p>Learn how to style your web pages with CSS and master the art of designing beautiful and responsive layouts.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to CSS</h2>
        <p>CSS (Cascading Style Sheets) is used to control the look and feel of a web page. It allows you to apply styles such as colors, fonts, spacing, and layout to HTML elements. By separating content (HTML) from presentation (CSS), you can maintain a consistent style across multiple pages and make your website look professional.</p>
    </div>
</section>

<section id="css-basics">
    <div class="container">
        <h2>CSS Basics</h2>
        <p>CSS uses rules to apply styles to HTML elements. Each rule consists of a selector and a set of declarations enclosed in curly braces. The selector targets the HTML element(s) to be styled, and the declarations specify the style properties and their values.</p>
        <h3>Basic Syntax</h3>
        <ul>
            <li><strong>Selector</strong>: Targets the HTML element(s) to apply styles to.</li>
            <li><strong>Declaration Block</strong>: Contains one or more declarations inside curly braces.</li>
            <li><strong>Property</strong>: The style attribute you want to change (e.g., <code>color</code>, <code>font-size</code>).</li>
            <li><strong>Value</strong>: The value assigned to the property (e.g., <code>blue</code>, <code>16px</code>).</li>
        </ul>
        <p>Example:</p>
        <pre><code>selector {
    property: value;
    property2: value2;
}
</code></pre>
        <p>Example:</p>
        <pre><code>p {
    color: blue;
    font-size: 16px;
}
</code></pre>
    </div>
</section>

<section id="selectors">
    <div class="container">
        <h2>CSS Selectors</h2>
        <p>Selecting the right elements is crucial for applying styles effectively. CSS provides various types of selectors to target HTML elements.</p>
        <h3>Types of Selectors</h3>
        <ul>
            <li><strong>Element Selector</strong>: Selects all elements of a given type. Example: <code>p</code> selects all <code>&lt;p&gt;</code> elements.</li>
            <li><strong>Class Selector</strong>: Selects elements with a specific class attribute. Example: <code>.class-name</code> selects all elements with the class <code>class-name</code>.</li>
            <li><strong>ID Selector</strong>: Selects a single element with a specific ID attribute. Example: <code>#id-name</code> selects the element with the ID <code>id-name</code>.</li>
            <li><strong>Attribute Selector</strong>: Selects elements with a specific attribute. Example: <code>[type="text"]</code> selects all <code>&lt;input&gt;</code> elements with the attribute <code>type="text"</code>.</li>
            <li><strong>Pseudo-classes</strong>: Selects elements in a specific state. Example: <code>:hover</code> selects elements when they are hovered over.</li>
        </ul>
        <p>Example:</p>
        <pre><code>/* Element Selector */
p {
    color: blue;
}

/* Class Selector */
.class-name {
    background-color: yellow;
}

/* ID Selector */
#id-name {
    margin: 10px;
}

/* Attribute Selector */
input[type="text"] {
    border: 1px solid gray;
}

/* Pseudo-class */
a:hover {
    color: red;
}
</code></pre>
    </div>
</section>

<section id="box-model">
    <div class="container">
        <h2>The CSS Box Model</h2>
        <p>The CSS box model describes the rectangular boxes generated for elements in the document tree. Understanding the box model is essential for layout and design.</p>
        <h3>Box Model Components</h3>
        <ul>
            <li><strong>Content</strong>: The actual content of the element, such as text or images.</li>
            <li><strong>Padding</strong>: The space between the content and the border. Padding is inside the element's box.</li>
            <li><strong>Border</strong>: A border surrounding the padding (if any) and content. You can customize its width, style, and color.</li>
            <li><strong>Margin</strong>: The space outside the border. Margins separate elements from one another.</li>
        </ul>
        <p>Example:</p>
        <pre><code>div {
    width: 200px;
    padding: 20px;
    border: 5px solid black;
    margin: 15px;
}
</code></pre>
    </div>
</section>

<section id="layout">
    <div class="container">
        <h2>CSS Layout Techniques</h2>
        <p>CSS provides several techniques for creating layouts and positioning elements on a web page. Mastering these techniques will help you design responsive and visually appealing web pages.</p>
        <h3>Common Layout Techniques</h3>
        <ul>
            <li><strong>Flexbox</strong>: A layout module designed for building flexible and responsive layouts. It allows you to align items horizontally or vertically with ease.</li>
            <li><strong>Grid</strong>: A powerful layout system that provides a two-dimensional grid-based layout. It allows for precise placement of elements in rows and columns.</li>
            <li><strong>Float</strong>: An older technique for positioning elements horizontally. Floats are used in combination with clearing techniques to create multi-column layouts.</li>
            <li><strong>Positioning</strong>: CSS properties such as <code>position</code>, <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> are used to position elements relative to their containing element or the viewport.</li>
        </ul>
        <p>Example (Flexbox):</p>
        <pre><code>.container {
    display: flex;
    justify-content: space-between;
}

.item {
    flex: 1;
    margin: 10px;
}
</code></pre>
    </div>
</section>

<section id="responsive-design">
    <div class="container">
        <h2>Responsive Design</h2>
        <p>Responsive design ensures that your web page looks good on all devices, from desktops to mobile phones. CSS media queries allow you to apply different styles based on device characteristics like screen size.</p>
        <h3>Media Queries</h3>
        <ul>
            <li><strong>Media Queries</strong>: Use media queries to apply styles conditionally based on the viewport's width, height, or other properties.</li>
            <li><strong>Responsive Units</strong>: Use relative units such as percentages, <code>em</code>, and <code>rem</code> instead of fixed units like pixels to ensure elements scale properly.</li>
        </ul>
        <p>Example:</p>
        <pre><code>@media screen and (max-width: 600px) {
    .container {
        flex-direction: column;
    }

    .item {
        margin: 5px;
    }
}
</code></pre>
    </div>
</section>

<section id="best-practices">
    <div class="container">
        <h2>CSS Best Practices</h2>
        <p>Following best practices helps you write clean, maintainable, and efficient CSS code.</p>
        <h3>Best Practices</h3>
        <ul>
            <li><strong>Use Classes for Styling:</strong> Avoid using inline styles or overly specific selectors. Use classes to apply styles consistently across your site.</li>
            <li><strong>Organize Your CSS:</strong> Group related styles together and use comments to separate different sections. This improves readability and maintainability.</li>
            <li><strong>Minimize CSS:</strong> Remove unused styles and combine multiple rules into one to reduce file size and improve load times.</li>
            <li><strong>Use CSS Preprocessors:</strong> Tools like Sass or Less can enhance your CSS workflow with features like variables, nesting, and mixins.</li>
        </ul>
    </div>
</section>

<section id="additional-resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Explore these resources to further enhance your CSS skills:</p>
        <ul>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">MDN Web Docs: CSS</a></li>
            <li><a href="https://www.w3schools.com/css/" target="_blank">W3Schools: CSS Tutorial</a></li>
            <li><a href="https://css-tricks.com/" target="_blank">CSS-Tricks</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';?>
