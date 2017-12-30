# Dockerfile

See README.md in each directory for README for each Dockerfile

# Create Automated Build

 1. Open the "Create Automated Build" page e.g.
    <https://hub.docker.com/add/automated-build/github/form/sharils/Dockerfile/>
 2. Change `Dockerfile` to a different name e.g. `ls`
 3. Fill in *Short Description*
 4. Click *Build Settings*
 5. Click *Branch*
 6. Click *Tag*
 7. Change `master` to a regex e.g. `/^ls-`
 8. Change `/` to the directory containing the Dockerfile e.g. `/ls`
 9. Click *Save Changes*
10. Push a git tag matching the regex in step 7 e.g. `ls-1.0.0`
11. Click *Build Details*
12. Verify the Status is Success
13. Click *Repo Info*
14. Copy `Docker Pull Command` and run it
15. Create a docker version e.g. `docker tag sharils/ls:latest sharils/ls:1.0.0`
16. Push the tag e.g. `docker push sharils/ls:1.0.0`
