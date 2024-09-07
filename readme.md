# Learn.WebMagic.be

An educational website offering IT courses for both younger and older audiences. The website supports multiple languages (English and Dutch) and uses cookies to manage users' language preferences.

## Table of Contents

- [Installation](#installation)
- [Project Structure](#project-structure)
- [Multilingual Support](#multilingual-support)
- [Cookie Management](#cookie-management)
- [Database](#database)
- [GitHub Configuration](#github-configuration)
- [License](#license)

## Installation

1. **Clone the project:**

   ```bash
   git clone https://github.com/diGiusepp3/php-learning-platform/

2. **Navigate to the project directory:**
   ```
     cd learn.webmagic.be
   
3. ** Install dependencies:**
   ```
   Make sure you have a local server such as XAMPP or WAMP to run PHP files.

# Project Structure
<ul>
    <li>/admin: Contains the admin-related files and database files.</li> 
    <br>
    <li>/includes: Includes additional PHP files for common functionalities. </li>
    <br>
    <li>/assets: Holds all images, stylesheets, and JavaScript files.</li>
    <br>
    <li> /translations: Contains language files (en.php and nl.php) for English and Dutch translations.</li>
</ul>

# Multilingual Support
   ```
   The website supports English and Dutch. Language preferences are managed via cookies, specifically webcrafters_lang. Translation files are structured as:
   /languages/en.php for english translations and /languages/nl.php for dutch translations. ```
   ```
   
   
# Cookie Management
   Cookies are used to manage language settings:
   <ul>
      <li>En.php: English translations </li>
      <li>nl.php: Dutch translations</li>
   </ul>

# Database 
Database files are located in
<ul>
   <li>/admin/</li>
   <li>/includes/</li>
</ul>

## Ensure these files are not tracked by Git for security reasons; they are added to the .gitignore.

# Github config
   Make sure to set up your .gitignore file properly to exclude sensitive files and directories. Commonly ignored files include:
   <ul>
      <li>.env files for environment variables</li>
      <li>Database config files</li>
      <li>Logs and temp files</li>
   </ul>

# License
   none
   

