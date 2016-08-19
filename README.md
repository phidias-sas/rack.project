# Working installation of phidias/rack.api

### Step 0: Add a custom composer repository
composer config repositories.REPOSITORY_NAME composer REPOSITORY_URL

### Step 1: Create the project
composer create-project phidias/rack.project

### Step 2: Go over your configuration settings
Look at all files inside the /configuration folder and edit as necessary

### Step 4: Run the installation script
./install.sh

### Step 5: publish
Make the /public directory available through a web server
An apache configuration file is available in /apache/phidias-rack.conf
