<?php
$pagetitle = "Scripting Languages Course";
$courseName = "Scripting Languages";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#what-is-scripting'>What is Scripting?</a></li>
                <li><a href='#popular-scripting-languages'>Popular Scripting Languages</a></li>
                <li><a href='#python'>Python</a></li>
                <li><a href='#javascript'>JavaScript</a></li>
                <li><a href='#ruby'>Ruby</a></li>
                <li><a href='#perl'>Perl</a></li>
                <li><a href='#use-cases'>Common Use Cases</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>Scripting Languages Course</h1>
            <p>Learn about various scripting languages used for automating tasks, web development, and more.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to Scripting Languages</h2>
        <p>Scripting languages are a type of programming language designed for integrating and communicating with other programming languages. They are often used for automating tasks, manipulating data, and interacting with system operations. Unlike compiled languages, scripting languages are typically interpreted at runtime.</p>
    </div>
</section>

<section id="what-is-scripting">
    <div class="container">
        <h2>What is Scripting?</h2>
        <p>Scripting involves writing code in a scripting language to automate processes or tasks. Scripting languages are generally used to control software applications or perform repetitive tasks quickly and efficiently.</p>
        <h3>Key Characteristics</h3>
        <ul>
            <li><strong>Interpreted:</strong> Scripting languages are usually interpreted rather than compiled.</li>
            <li><strong>Dynamic:</strong> They often allow for dynamic typing and flexible data manipulation.</li>
            <li><strong>Embedded:</strong> They can be embedded in other applications or used to extend existing functionality.</li>
        </ul>
    </div>
</section>

<section id="popular-scripting-languages">
    <div class="container">
        <h2>Popular Scripting Languages</h2>
        <p>Several scripting languages are widely used across different domains. Here are some of the most popular ones:</p>
        <ul>
            <li><strong>Python:</strong> Known for its readability and simplicity, widely used for web development, data analysis, and automation.</li>
            <li><strong>JavaScript:</strong> Primarily used for client-side web development to create interactive web pages.</li>
            <li><strong>Ruby:</strong> A dynamic language known for its elegant syntax, commonly used in web development with the Ruby on Rails framework.</li>
            <li><strong>Perl:</strong> Used for text processing, system administration, and web development.</li>
        </ul>
    </div>
</section>

<section id="python">
    <div class="container">
        <h2>Python</h2>
        <p>Python is a high-level, interpreted scripting language known for its clear syntax and readability. It is used in a variety of applications, from web development to scientific computing.</p>
        <h3>Getting Started with Python</h3>
        <ul>
            <li><strong>Installation:</strong> Download and install Python from the official <a href="https://www.python.org/downloads/" target="_blank">Python website</a>.</li>
            <li><strong>Basic Syntax:</strong> Python uses indentation to define code blocks.</li>
            <li><strong>Example:</strong></li>
        </ul>
        <pre><code># Simple Python program
print("Hello, World!")
</code></pre>
    </div>
</section>

<section id="javascript">
    <div class="container">
        <h2>JavaScript</h2>
        <p>JavaScript is a versatile scripting language primarily used for client-side web development. It enables dynamic content and interactive features on websites.</p>
        <h3>Getting Started with JavaScript</h3>
        <ul>
            <li><strong>Adding JavaScript to HTML:</strong> Include JavaScript code in HTML using the <code>&lt;script&gt;</code> tag.</li>
            <li><strong>Basic Syntax:</strong> JavaScript uses a syntax similar to other C-based languages.</li>
            <li><strong>Example:</strong></li>
        </ul>
        <pre><code>// Simple JavaScript program
console.log("Hello, World!");
</code></pre>
    </div>
</section>

<section id="ruby">
    <div class="container">
        <h2>Ruby</h2>
        <p>Ruby is an elegant, high-level scripting language known for its simplicity and productivity. It is often used in web development with the Ruby on Rails framework.</p>
        <h3>Getting Started with Ruby</h3>
        <ul>
            <li><strong>Installation:</strong> Download and install Ruby from the official <a href="https://www.ruby-lang.org/en/downloads/" target="_blank">Ruby website</a>.</li>
            <li><strong>Basic Syntax:</strong> Ruby uses a simple and clean syntax.</li>
            <li><strong>Example:</strong></li>
        </ul>
        <pre><code># Simple Ruby program
puts "Hello, World!"
</code></pre>
    </div>
</section>

<section id="perl">
    <div class="container">
        <h2>Perl</h2>
        <p>Perl is a powerful scripting language known for its text processing capabilities and versatility. It is used in web development, network programming, and system administration.</p>
        <h3>Getting Started with Perl</h3>
        <ul>
            <li><strong>Installation:</strong> Download and install Perl from the official <a href="https://www.perl.org/get.html" target="_blank">Perl website</a>.</li>
            <li><strong>Basic Syntax:</strong> Perl uses a flexible syntax for different programming styles.</li>
            <li><strong>Example:</strong></li>
        </ul>
        <pre><code># Simple Perl program
print "Hello, World!\n";
</code></pre>
    </div>
</section>

<section id="use-cases">
    <div class="container">
        <h2>Common Use Cases</h2>
        <p>Scripting languages are used in various domains and for multiple purposes. Here are some common use cases:</p>
        <ul>
            <li><strong>Automating Tasks:</strong> Automate repetitive tasks, such as file manipulation and system administration.</li>
            <li><strong>Web Development:</strong> Create dynamic and interactive web applications.</li>
            <li><strong>Data Analysis:</strong> Process and analyze large datasets efficiently.</li>
            <li><strong>System Administration:</strong> Write scripts for system monitoring and maintenance.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Further your knowledge of scripting languages with these resources:</p>
        <ul>
            <li><a href="https://www.learnpython.org/" target="_blank">Learn Python</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">MDN Web Docs - JavaScript</a></li>
            <li><a href="https://www.ruby-lang.org/en/documentation/" target="_blank">Ruby Documentation</a></li>
            <li><a href="https://www.perl.org/docs.html" target="_blank">Perl Documentation</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
