<?php
$pagetitle = "Back-End Development Course";
$courseName = "Back-End Development";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#server-side-languages'>Server-Side Languages</a></li>
                <li><a href='#databases'>Databases</a></li>
                <li><a href='#api-development'>API Development</a></li>
                <li><a href='#authentication'>Authentication & Authorization</a></li>
                <li><a href='#deployment'>Deployment</a></li>
                <li><a href='#best-practices'>Best Practices</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>Back-End Development Course</h1>
            <p>Learn the essentials of back-end development and how to build robust server-side applications that power dynamic web experiences.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to Back-End Development</h2>
        <p>Back-End Development involves building the server-side components of web applications. It focuses on handling the logic, database interactions, user authentication, and server configuration that ensure the front-end can operate smoothly and efficiently. In this course, you'll learn how to create scalable and efficient back-end systems using various technologies.</p>
    </div>
</section>

<section id="server-side-languages">
    <div class="container">
        <h2>Server-Side Languages</h2>
        <p>Server-side languages are used to write the logic that runs on the server. These languages handle requests from the client, process data, and send responses back to the client. Some popular server-side languages include:</p>
        <h3>Key Server-Side Languages</h3>
        <ul>
            <li><strong>PHP</strong>: A widely-used scripting language designed for web development. Example: <code>echo "Hello, World!";</code></li>
            <li><strong>Python</strong>: Known for its simplicity and readability. Often used with frameworks like Django and Flask. Example: <code>print("Hello, World!")</code></li>
            <li><strong>JavaScript (Node.js)</strong>: JavaScript runtime built on Chrome's V8 engine. Example: <code>console.log("Hello, World!");</code></li>
            <li><strong>Ruby</strong>: Used with the Ruby on Rails framework to build web applications. Example: <code>puts "Hello, World!"</code></li>
            <li><strong>Java</strong>: Commonly used with frameworks like Spring Boot for enterprise-level applications. Example: <code>System.out.println("Hello, World!");</code></li>
        </ul>
    </div>
</section>

<section id="databases">
    <div class="container">
        <h2>Databases</h2>
        <p>Databases are essential for storing, retrieving, and managing application data. There are two main types of databases:</p>
        <h3>Types of Databases</h3>
        <ul>
            <li><strong>Relational Databases</strong>: Use tables to store data in a structured format. Examples include MySQL, PostgreSQL, and SQLite. SQL (Structured Query Language) is used for querying these databases.</li>
            <li><strong>NoSQL Databases</strong>: Designed for unstructured data and scalable applications. Examples include MongoDB, Redis, and Cassandra.</li>
        </ul>
        <p>Example SQL Query:</p>
        <pre><code>SELECT * FROM users WHERE age > 25;
</code></pre>
        <p>Example MongoDB Query:</p>
        <pre><code>db.users.find({ age: { $gt: 25 } });
</code></pre>
    </div>
</section>

<section id="api-development">
    <div class="container">
        <h2>API Development</h2>
        <p>Application Programming Interfaces (APIs) allow different software systems to communicate with each other. In back-end development, you'll often build APIs to provide data and functionality to front-end applications.</p>
        <h3>Key API Concepts</h3>
        <ul>
            <li><strong>RESTful APIs</strong>: Use HTTP requests to interact with resources. Common methods include GET, POST, PUT, and DELETE.</li>
            <li><strong>GraphQL</strong>: A query language for APIs that allows clients to request specific data. It provides a more flexible alternative to REST.</li>
            <li><strong>Authentication</strong>: Ensures that only authorized users can access certain API endpoints. Common methods include API keys, OAuth, and JWT.</li>
        </ul>
        <p>Example RESTful API Endpoint (using Node.js with Express):</p>
        <pre><code>const express = require('express');
const app = express();

app.get('/api/users', (req, res) => {
    res.json([{ name: 'John Doe' }, { name: 'Jane Doe' }]);
});

app.listen(3000, () => console.log('Server running on port 3000'));
</code></pre>
    </div>
</section>

<section id="authentication">
    <div class="container">
        <h2>Authentication & Authorization</h2>
        <p>Authentication verifies the identity of users, while authorization determines their access rights. Both are crucial for securing back-end systems and protecting user data.</p>
        <h3>Key Authentication & Authorization Techniques</h3>
        <ul>
            <li><strong>Password-Based Authentication</strong>: Users provide a username and password to gain access.</li>
            <li><strong>OAuth</strong>: An authorization framework that allows third-party applications to access user data without exposing credentials.</li>
            <li><strong>JSON Web Tokens (JWT)</strong>: Tokens used to securely transmit information between parties.</li>
        </ul>
        <p>Example Authentication with JWT (using Node.js):</p>
        <pre><code>const jwt = require('jsonwebtoken');

const token = jwt.sign({ userId: 123 }, 'secretkey', { expiresIn: '1h' });
console.log(token);
</code></pre>
    </div>
</section>

<section id="deployment">
    <div class="container">
        <h2>Deployment</h2>
        <p>Deployment involves making your application accessible on the internet. This typically includes setting up servers, configuring environments, and deploying code.</p>
        <h3>Key Deployment Steps</h3>
        <ul>
            <li><strong>Choose a Hosting Provider</strong>: Select a provider such as AWS, Azure, or Heroku.</li>
            <li><strong>Configure the Server</strong>: Set up server environments, such as installing necessary software and configuring settings.</li>
            <li><strong>Deploy Your Code</strong>: Upload your application code to the server using tools like FTP, SCP, or deployment pipelines.</li>
            <li><strong>Monitor and Maintain</strong>: Continuously monitor the application for issues and update it as necessary.</li>
        </ul>
    </div>
</section>

<section id="best-practices">
    <div class="container">
        <h2>Best Practices</h2>
        <p>Following best practices helps ensure that your back-end code is efficient, secure, and maintainable.</p>
        <h3>Key Best Practices</h3>
        <ul>
            <li><strong>Code Organization</strong>: Keep code modular and well-organized to enhance readability and maintainability.</li>
            <li><strong>Error Handling</strong>: Implement robust error handling to manage and log errors effectively.</li>
            <li><strong>Security</strong>: Protect your application from common security vulnerabilities such as SQL injection and cross-site scripting (XSS).</li>
            <li><strong>Performance Optimization</strong>: Optimize database queries and use caching to improve performance.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Expand your knowledge with these additional resources:</p>
        <ul>
            <li><a href="https://www.udemy.com/course/the-complete-nodejs-developer-course-2/" target="_blank">Udemy: The Complete Node.js Developer Course</a></li>
            <li><a href="https://www.coursera.org/learn/server-side-development" target="_blank">Coursera: Server-Side Development with Node.js</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Learn/Server-side" target="_blank">MDN Web Docs: Server-side Development</a></li>
            <li><a href="https://www.pluralsight.com/paths/node-js" target="_blank">Pluralsight: Node.js Path</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';?>
