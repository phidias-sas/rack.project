# Working installation of phidias/rack.api

### Step 1: Create the project
`composer create-project phidias/rack.project <target folder>`

## Got an error? Step 1.1: Add a custom composer repository
Some packages are hosted in a private repository.  Withing the target folder you can add a private repository to your project and install missing packages:
`composer config repositories.REPOSITORY_NAME composer REPOSITORY_URL`
`composer install`

### Step 2: Edit configuration settings
Look at all files inside the /configuration folder and edit as necessary

### Step 4: Run the installation script
This script will create the database
`./install.sh`

### Step 5: publish
Make the /public directory available through a web server
An apache configuration file is available in /apache/phidias-rack.conf
