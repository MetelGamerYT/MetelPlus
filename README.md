# MetelPlus

MetelPlus is a streaming-focused website where users can upload their own movies, add them to a database, and then watch them with a created account on the site.

## Installation

1. **Download**: Clone the repository to your local machine using the following command:
```bash
git clone https://github.com/metelgameryt/MetelPlus.git
```

2. **Upload to Web Server**: Upload the downloaded files to your web server.

3. **Setup MySQL Connection**: Create a MySQL database on your server and import the included .sql file to set up the necessary tables.
```bash
mysql -u username -p database_name < metelplus.sql
```

4. **Add a Movie**:
- Place the MP4 file in the 'media' directory and the movie thumbnail in the 'media/thumbnails' directory.
- To set up the movie, add the following details to the 'movies' folder:
  - `movie_name`
  - `movie_description`
  - `movie_filename`
  - `movie_thumbnail`

## Todos for the Future

- Implement a more responsive user interface.
- Save the progress of movies watched, including the time where the user stopped.
- Add support for TV series.
- Implement an admin interface for adding movies/series.
- Add pagination (page numbers) to the search page.
- Disable direct access to certain pages.
- Implement a "Stay Logged In" feature.
