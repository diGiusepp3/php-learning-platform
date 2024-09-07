<?php
$pagetitle = "Cybersecurity Course";
$courseName = "Cybersecurity";

$navContent  = "
        <nav>
            <ul>
                <li><a href='#introduction'>Introduction</a></li>
                <li><a href='#cybersecurity-basics'>Cybersecurity Basics</a></li>
                <li><a href='#threats'>Common Threats</a></li>
                <li><a href='#security-practices'>Best Security Practices</a></li>
                <li><a href='#tools'>Essential Security Tools</a></li>
                <li><a href='#incident-response'>Incident Response</a></li>
                <li><a href='#resources'>Additional Resources</a></li>
            </ul>
        </nav>";

$heroContent = "
        <div class='hero-content'>
            <h1>Cybersecurity Course</h1>
            <p>Learn the fundamentals of cybersecurity and protect your systems and data from various cyber threats.</p>
        </div>
    ";

include $_SERVER['DOCUMENT_ROOT'] . '/partials/header.php';
?>

<section id="introduction">
    <div class="container">
        <h2>Introduction to Cybersecurity</h2>
        <p>Cybersecurity involves protecting computer systems and networks from digital attacks, unauthorized access, and damage. As technology evolves, so do the methods used by cybercriminals. This course is designed to provide you with a comprehensive understanding of cybersecurity concepts, practices, and tools.</p>
    </div>
</section>

<section id="cybersecurity-basics">
    <div class="container">
        <h2>Cybersecurity Basics</h2>
        <p>Cybersecurity encompasses various techniques and practices to safeguard systems and data from cyber threats. Understanding the basics is essential for anyone looking to enhance their knowledge in this field.</p>
        <h3>Key Concepts</h3>
        <ul>
            <li><strong>Confidentiality</strong>: Ensuring that information is accessible only to those authorized to have access.</li>
            <li><strong>Integrity</strong>: Protecting information from being altered or destroyed by unauthorized individuals.</li>
            <li><strong>Availability</strong>: Ensuring that information and resources are available to authorized users when needed.</li>
            <li><strong>Authentication</strong>: Verifying the identity of users and systems.</li>
            <li><strong>Authorization</strong>: Granting access rights to users based on their identity and roles.</li>
        </ul>
        <p>Example Diagram:</p>
        <pre><code>Confidentiality → Encryption
Integrity → Hash Functions
Availability → Redundancy
Authentication → Multi-Factor Authentication
Authorization → Access Control Lists
</code></pre>
    </div>
</section>

<section id="threats">
    <div class="container">
        <h2>Common Cybersecurity Threats</h2>
        <p>Understanding the types of threats that can compromise security is crucial for developing effective defense strategies.</p>
        <h3>Key Threats</h3>
        <ul>
            <li><strong>Phishing</strong>: A social engineering attack where attackers deceive individuals into providing sensitive information.</li>
            <li><strong>Malware</strong>: Malicious software designed to disrupt, damage, or gain unauthorized access to systems. Examples include viruses, trojans, and ransomware.</li>
            <li><strong>Denial of Service (DoS)</strong>: An attack intended to make a service unavailable by overwhelming it with traffic.</li>
            <li><strong>Man-in-the-Middle (MitM)</strong>: An attack where the attacker intercepts and potentially alters communications between two parties.</li>
            <li><strong>SQL Injection</strong>: An attack that involves inserting malicious SQL queries into a web application to manipulate databases.</li>
        </ul>
    </div>
</section>

<section id="security-practices">
    <div class="container">
        <h2>Best Security Practices</h2>
        <p>Implementing best practices is key to maintaining robust cybersecurity defenses. Regularly updating and reviewing security measures can help protect against evolving threats.</p>
        <h3>Key Practices</h3>
        <ul>
            <li><strong>Regular Updates</strong>: Keep software, systems, and applications up to date with the latest patches and security updates.</li>
            <li><strong>Strong Passwords</strong>: Use complex and unique passwords for different accounts and systems.</li>
            <li><strong>Multi-Factor Authentication (MFA)</strong>: Implement additional verification methods to enhance security beyond just passwords.</li>
            <li><strong>Regular Backups</strong>: Create and maintain regular backups of critical data to ensure recovery in case of an attack.</li>
            <li><strong>Network Security</strong>: Use firewalls, intrusion detection systems, and encryption to secure network traffic.</li>
        </ul>
    </div>
</section>

<section id="tools">
    <div class="container">
        <h2>Essential Security Tools</h2>
        <p>Various tools can help in protecting systems and detecting vulnerabilities. Familiarizing yourself with these tools can aid in managing and improving cybersecurity.</p>
        <h3>Popular Security Tools</h3>
        <ul>
            <li><strong>Antivirus Software</strong>: Provides protection against malware and viruses. Examples include Norton, McAfee, and Bitdefender.</li>
            <li><strong>Firewalls</strong>: Monitors and controls incoming and outgoing network traffic based on predetermined security rules. Examples include pfSense and Windows Firewall.</li>
            <li><strong>Intrusion Detection Systems (IDS)</strong>: Detects and alerts on suspicious activities within a network. Examples include Snort and Suricata.</li>
            <li><strong>Vulnerability Scanners</strong>: Identifies security weaknesses in systems and applications. Examples include Nessus and OpenVAS.</li>
            <li><strong>Encryption Tools</strong>: Protects data by converting it into a secure format. Examples include VeraCrypt and BitLocker.</li>
        </ul>
    </div>
</section>

<section id="incident-response">
    <div class="container">
        <h2>Incident Response</h2>
        <p>Effective incident response is essential for addressing and mitigating security breaches. Having a structured response plan can reduce the impact of incidents.</p>
        <h3>Key Steps in Incident Response</h3>
        <ul>
            <li><strong>Preparation</strong>: Develop and implement an incident response plan, including roles and responsibilities.</li>
            <li><strong>Detection and Analysis</strong>: Identify and assess potential security incidents through monitoring and analysis.</li>
            <li><strong>Containment</strong>: Implement measures to contain and limit the impact of the incident.</li>
            <li><strong>Eradication</strong>: Remove the cause of the incident and ensure that no traces remain.</li>
            <li><strong>Recovery</strong>: Restore systems and services to normal operation while monitoring for any signs of recurrence.</li>
            <li><strong>Post-Incident Review</strong>: Conduct a review of the incident to learn from it and improve future response efforts.</li>
        </ul>
    </div>
</section>

<section id="resources">
    <div class="container">
        <h2>Additional Resources</h2>
        <p>Expand your knowledge and stay updated with these cybersecurity resources:</p>
        <ul>
            <li><a href="https://www.coursera.org/specializations/ibm-cybersecurity-analyst" target="_blank">IBM Cybersecurity Analyst Specialization (Coursera)</a></li>
            <li><a href="https://www.cybrary.it/" target="_blank">Cybrary</a></li>
            <li><a href="https://www.sans.org/cyber-security-training/" target="_blank">SANS Institute Training</a></li>
            <li><a href="https://www.krebs-on-security.com/" target="_blank">Krebs on Security</a></li>
        </ul>
    </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php';?>
