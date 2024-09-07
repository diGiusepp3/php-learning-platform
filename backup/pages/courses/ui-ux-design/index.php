<?php
$pagetitle = "UI/UX Design Course";
$courseName = "UI/UX Design";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#ui-vs-ux'>UI vs UX</a></li>
                <li><a href='#user-research'>User Research</a></li>
                <li><a href='#wireframing'>Wireframing</a></li>
                <li><a href='#prototyping'>Prototyping</a></li>
                <li><a href='#usability-testing'>Usability Testing</a></li>
                <li><a href='#design-principles'>Design Principles</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>UI/UX Design Course</h1>
            <p>Learn the principles of User Interface (UI) and User Experience (UX) design to create engaging and user-friendly digital products.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to UI/UX Design</h2>
        <p>UI/UX Design focuses on the design and user experience of digital products. UI (User Interface) design is about creating visually appealing and functional interfaces, while UX (User Experience) design is about ensuring a seamless and enjoyable experience for users.</p>
    </div>
</section>

<section id="ui-vs-ux">
    <div class="container">
        <h2>UI vs UX</h2>
        <p>Understanding the difference between UI and UX is crucial for creating effective digital products. While they are interconnected, they address different aspects of the design process.</p>
        <h3>UI Design</h3>
        <p>UI Design focuses on the look and feel of a product. It includes designing buttons, icons, typography, color schemes, and overall layout to create a visually appealing interface.</p>
        <h3>UX Design</h3>
        <p>UX Design is about optimizing the overall user journey and experience. It involves researching user needs, creating user personas, mapping user flows, and ensuring the product is easy to use and meets user expectations.</p>
    </div>
</section>

<section id="user-research">
    <div class="container">
        <h2>User Research</h2>
        <p>User research is essential for understanding the needs and behaviors of users. It involves gathering insights through various methods to inform design decisions and create user-centered designs.</p>
        <h3>Research Methods</h3>
        <ul>
            <li><strong>Interviews:</strong> Conducting one-on-one interviews with users to gather qualitative data.</li>
            <li><strong>Surveys:</strong> Collecting quantitative data through structured questionnaires.</li>
            <li><strong>Usability Testing:</strong> Observing users as they interact with a prototype or product to identify usability issues.</li>
        </ul>
    </div>
</section>

<section id="wireframing">
    <div class="container">
        <h2>Wireframing</h2>
        <p>Wireframing is the process of creating basic visual representations of a product's layout and structure. Wireframes are used to outline the placement of elements and functionality before moving into detailed design.</p>
        <h3>Key Aspects</h3>
        <ul>
            <li><strong>Layout:</strong> Defining the arrangement of elements on a page or screen.</li>
            <li><strong>Content:</strong> Outlining the content areas and their hierarchy.</li>
            <li><strong>Functionality:</strong> Identifying interactive elements and their behavior.</li>
        </ul>
        <p>Example:</p>
        <pre><code>+-----------------+
|     Header      |
+-----------------+
|   Navigation    |
+-----------------+
|    Main Content |
+-----------------+
|     Footer      |
+-----------------+
</code></pre>
    </div>
</section>

<section id="prototyping">
    <div class="container">
        <h2>Prototyping</h2>
        <p>Prototyping involves creating interactive models of a product to test and validate design ideas. Prototypes can range from low-fidelity (paper sketches) to high-fidelity (interactive digital models).</p>
        <h3>Prototyping Types</h3>
        <ul>
            <li><strong>Low-Fidelity Prototypes:</strong> Basic models, such as paper sketches or wireframes, used for early-stage testing and feedback.</li>
            <li><strong>High-Fidelity Prototypes:</strong> Detailed and interactive models that closely resemble the final product, used for more in-depth testing.</li>
        </ul>
    </div>
</section>

<section id="usability-testing">
    <div class="container">
        <h2>Usability Testing</h2>
        <p>Usability testing is the process of evaluating a product's usability by observing real users as they interact with it. The goal is to identify any usability issues and gather feedback to improve the product.</p>
        <h3>Testing Methods</h3>
        <ul>
            <li><strong>Moderated Testing:</strong> Conducted with a facilitator who guides users through tasks and asks questions.</li>
            <li><strong>Unmoderated Testing:</strong> Users complete tasks on their own, and their interactions are recorded for later analysis.</li>
        </ul>
    </div>
</section>

<section id="design-principles">
    <div class="container">
        <h2>Design Principles</h2>
        <p>Applying design principles helps ensure that your designs are effective, user-friendly, and visually appealing. Here are some key principles to consider:</p>
        <ul>
            <li><strong>Consistency:</strong> Ensure that design elements are used consistently throughout the product.</li>
            <li><strong>Clarity:</strong> Design interfaces that are easy to understand and use.</li>
            <li><strong>Feedback:</strong> Provide feedback to users about their actions and the system's state.</li>
            <li><strong>Accessibility:</strong> Design products that are accessible to users with disabilities.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Enhance your UI/UX design skills with these resources:</p>
        <ul>
            <li><a href="https://www.nngroup.com/" target="_blank">Nielsen Norman Group</a></li>
            <li><a href="https://www.smashingmagazine.com/category/uxdesign" target="_blank">Smashing Magazine - UX Design</a></li>
            <li><a href="https://www.interaction-design.org/" target="_blank">Interaction Design Foundation</a></li>
            <li><a href="https://uxdesign.cc/" target="_blank">UX Design.cc</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
