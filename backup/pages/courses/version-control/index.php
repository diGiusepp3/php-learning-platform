<?php
$pagetitle = "Version Control Course";
$courseName = "Version Control";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#what-is-version-control'>What is Version Control?</a></li>
                <li><a href='#git-basics'>Git Basics</a></li>
                <li><a href='#branching-and-merging'>Branching and Merging</a></li>
                <li><a href='#collaborating-with-git'>Collaborating with Git</a></li>
                <li><a href='#version-control-tools'>Version Control Tools</a></li>
                <li><a href='#best-practices'>Best Practices</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>Version Control Course</h1>
            <p>Master version control systems to manage and track changes in your codebase efficiently.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to Version Control</h2>
        <p>Version control systems (VCS) are essential tools for managing changes to your codebase. They help you track modifications, collaborate with others, and revert to previous versions if needed. This course will introduce you to version control concepts and tools, with a focus on Git, the most popular version control system.</p>
    </div>
</section>

<section id="what-is-version-control">
    <div class="container">
        <h2>What is Version Control?</h2>
        <p>Version control is a system that allows multiple people to work on a project simultaneously without overwriting each other's work. It records changes to files over time, enabling you to track and manage different versions of your code.</p>
        <h3>Key Concepts</h3>
        <ul>
            <li><strong>Repository:</strong> A storage location for your project's files and their version history.</li>
            <li><strong>Commit:</strong> A snapshot of changes made to the files in your repository.</li>
            <li><strong>Branch:</strong> A separate line of development that allows you to work on features or fixes independently.</li>
            <li><strong>Merge:</strong> The process of integrating changes from one branch into another.</li>
        </ul>
    </div>
</section>

<section id="git-basics">
    <div class="container">
        <h2>Git Basics</h2>
        <p>Git is a distributed version control system that helps you manage your project's history and collaborate with others. Here are some basic Git commands:</p>
        <h3>Basic Commands</h3>
        <ul>
            <li><strong><code>git init</code></strong>: Initializes a new Git repository.</li>
            <li><strong><code>git clone [url]</code></strong>: Clones an existing repository from a URL.</li>
            <li><strong><code>git add [file]</code></strong>: Stages changes to be committed.</li>
            <li><strong><code>git commit -m "message"</code></strong>: Commits staged changes with a message.</li>
            <li><strong><code>git status</code></strong>: Shows the status of changes in the repository.</li>
            <li><strong><code>git log</code></strong>: Displays the commit history.</li>
        </ul>
        <p>Example:</p>
        <pre><code>git init
git add index.php
git commit -m "Initial commit"
</code></pre>
    </div>
</section>

<section id="branching-and-merging">
    <div class="container">
        <h2>Branching and Merging</h2>
        <p>Branching allows you to create separate lines of development. Merging integrates changes from one branch into another. These practices are crucial for managing features and bug fixes.</p>
        <h3>Branching</h3>
        <ul>
            <li><strong><code>git branch [branch-name]</code></strong>: Creates a new branch.</li>
            <li><strong><code>git checkout [branch-name]</code></strong>: Switches to the specified branch.</li>
        </ul>
        <h3>Merging</h3>
        <ul>
            <li><strong><code>git merge [branch-name]</code></strong>: Merges changes from the specified branch into the current branch.</li>
        </ul>
        <p>Example:</p>
        <pre><code>git branch feature-branch
git checkout feature-branch
git merge feature-branch
</code></pre>
    </div>
</section>

<section id="collaborating-with-git">
    <div class="container">
        <h2>Collaborating with Git</h2>
        <p>Git makes collaboration easier by allowing multiple people to work on the same project. Here are some key concepts for collaboration:</p>
        <h3>Collaboration Commands</h3>
        <ul>
            <li><strong><code>git pull</code></strong>: Fetches and merges changes from a remote repository.</li>
            <li><strong><code>git push</code></strong>: Pushes local commits to a remote repository.</li>
            <li><strong><code>git fetch</code></strong>: Retrieves changes from a remote repository without merging.</li>
        </ul>
        <p>Example:</p>
        <pre><code>git pull origin main
git push origin feature-branch
</code></pre>
    </div>
</section>

<section id="version-control-tools">
    <div class="container">
        <h2>Version Control Tools</h2>
        <p>In addition to Git, there are other version control systems and tools available. Here are a few notable ones:</p>
        <ul>
            <li><strong>Subversion (SVN):</strong> A centralized version control system.</li>
            <li><strong>Mercurial:</strong> A distributed version control system similar to Git.</li>
            <li><strong>GitHub:</strong> A web-based platform for hosting Git repositories and collaborating with others.</li>
            <li><strong>GitLab:</strong> A web-based DevOps lifecycle tool that provides Git repository management.</li>
        </ul>
    </div>
</section>

<section id="best-practices">
    <div class="container">
        <h2>Best Practices</h2>
        <p>To make the most of version control, follow these best practices:</p>
        <ul>
            <li><strong>Commit Often:</strong> Make frequent commits to capture your progress and changes.</li>
            <li><strong>Write Descriptive Commit Messages:</strong> Clearly describe the changes made in each commit.</li>
            <li><strong>Use Branches:</strong> Create branches for new features or bug fixes to keep the main branch stable.</li>
            <li><strong>Merge Regularly:</strong> Regularly merge branches to avoid conflicts and ensure all changes are integrated.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Expand your knowledge of version control with these resources:</p>
        <ul>
            <li><a href="https://git-scm.com/doc" target="_blank">Git Documentation</a></li>
            <li><a href="https://www.atlassian.com/git/tutorials" target="_blank">Atlassian Git Tutorials</a></li>
            <li><a href="https://www.gitkraken.com/learn/git" target="_blank">GitKraken Git Learning Resources</a></li>
            <li><a href="https://www.codecademy.com/learn/learn-git" target="_blank">Codecademy Git Course</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php'; ?>
