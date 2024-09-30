# ricky-php-dg

# How to Run

1. Create `.env` file based on the `.env.sample` file and set its values.
2. Have docker.
3. If using MySQL outside of this `docker-compose`, feel free to delete/comment the `ricky-mysql` service on the compose file and set the `.env` accordingly.
4. Use the the script located at `mysql/init.sql` to initialize the database schema and/or seed sample data. (if using MySql from this compose, run the script after docker is running on `step 5`).
5. run the app by running `docker-compose up`.
6. Navigate to http://localhost:8180 (link is provided here to `/cars` page) or http://localhost:8180/cars to start testing.

If you have any questions/issue do not hestitate to contact me.
