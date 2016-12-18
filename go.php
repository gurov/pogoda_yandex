<?php

require __DIR__ . '/simple_html_dom.php';

$files = [
    '2016-11-19-14-25',
    '2016-11-19-15-25',
    '2016-11-19-16-25',
    '2016-11-19-17-25',
    '2016-11-19-18-25',
    '2016-11-19-19-25',
    '2016-11-19-20-25',
    '2016-11-19-21-25',
    '2016-11-19-22-25',
    '2016-11-19-23-25',
    '2016-11-20-00-25',
    '2016-11-20-01-25',
    '2016-11-20-02-25',
    '2016-11-20-03-25',
    '2016-11-20-04-25',
    '2016-11-20-05-25',
    '2016-11-20-06-25',
    '2016-11-20-07-25',
    '2016-11-20-08-25',
    '2016-11-20-09-25',
    '2016-11-20-10-25',
    '2016-11-20-11-25',
    '2016-11-20-12-25',
    '2016-11-20-13-25',
    '2016-11-20-14-25',
    '2016-11-20-15-25',
    '2016-11-20-16-25',
    '2016-11-20-17-25',
    '2016-11-20-18-25',
    '2016-11-20-19-25',
    '2016-11-20-20-25',
    '2016-11-20-21-25',
    '2016-11-20-22-25',
    '2016-11-20-23-25',
    '2016-11-21-00-25',
    '2016-11-21-01-25',
    '2016-11-21-02-25',
    '2016-11-21-03-25',
    '2016-11-21-04-25',
    '2016-11-21-05-25',
    '2016-11-21-06-25',
    '2016-11-21-07-25',
    '2016-11-21-08-25',
    '2016-11-21-09-25',
    '2016-11-21-10-25',
    '2016-11-21-11-25',
    '2016-11-21-12-25',
    '2016-11-21-13-25',
    '2016-11-21-14-25',
    '2016-11-21-15-25',
    '2016-11-21-16-25',
    '2016-11-21-17-25',
    '2016-11-21-18-25',
    '2016-11-21-19-25',
    '2016-11-21-20-25',
    '2016-11-21-21-25',
    '2016-11-21-22-25',
    '2016-11-21-23-25',
    '2016-11-22-00-25',
    '2016-11-22-01-25',
    '2016-11-22-02-25',
    '2016-11-22-03-25',
    '2016-11-22-04-25',
    '2016-11-22-05-25',
    '2016-11-22-06-25',
    '2016-11-22-07-25',
    '2016-11-22-08-25',
    '2016-11-22-09-25',
    '2016-11-22-10-25',
    '2016-11-22-11-25',
    '2016-11-22-12-25',
    '2016-11-22-13-25',
    '2016-11-22-14-25',
    '2016-11-22-15-25',
    '2016-11-22-16-25',
    '2016-11-22-17-25',
    '2016-11-22-18-25',
    '2016-11-22-19-25',
    '2016-11-22-20-25',
    '2016-11-22-21-25',
    '2016-11-22-22-25',
    '2016-11-22-23-25',
    '2016-11-23-00-25',
    '2016-11-23-01-25',
    '2016-11-23-02-25',
    '2016-11-23-03-25',
    '2016-11-23-04-25',
    '2016-11-23-05-25',
    '2016-11-23-06-25',
    '2016-11-23-07-25',
    '2016-11-23-08-25',
    '2016-11-23-09-25',
    '2016-11-23-10-25',
    '2016-11-23-11-25',
    '2016-11-23-12-25',
    '2016-11-23-13-25',
    '2016-11-23-14-25',
    '2016-11-23-15-25',
    '2016-11-23-16-25',
    '2016-11-23-17-25',
    '2016-11-23-18-25',
    '2016-11-23-19-25',
    '2016-11-23-20-25',
    '2016-11-23-21-25',
    '2016-11-23-22-25',
    '2016-11-23-23-25',
    '2016-11-24-00-25',
    '2016-11-24-01-25',
    '2016-11-24-02-25',
    '2016-11-24-03-25',
    '2016-11-24-04-25',
    '2016-11-24-05-25',
    '2016-11-24-06-25',
    '2016-11-24-07-25',
    '2016-11-24-08-25',
    '2016-11-24-09-25',
    '2016-11-24-10-25',
    '2016-11-24-11-25',
    '2016-11-24-12-25',
    '2016-11-24-13-25',
    '2016-11-24-14-25',
    '2016-11-24-15-25',
    '2016-11-24-16-25',
    '2016-11-24-17-25',
    '2016-11-24-18-25',
    '2016-11-24-19-25',
    '2016-11-24-20-25',
    '2016-11-24-21-25',
    '2016-11-24-22-25',
    '2016-11-24-23-25',
    '2016-11-25-00-25',
    '2016-11-25-01-25',
    '2016-11-25-02-25',
    '2016-11-25-03-25',
    '2016-11-25-04-25',
    '2016-11-25-05-25',
    '2016-11-25-06-25',
    '2016-11-25-07-25',
    '2016-11-25-08-25',
    '2016-11-25-09-25',
    '2016-11-25-10-25',
    '2016-11-25-11-25',
    '2016-11-25-12-25',
    '2016-11-25-13-25',
    '2016-11-25-14-25',
    '2016-11-25-15-25',
    '2016-11-25-16-25',
    '2016-11-25-17-25',
    '2016-11-25-18-25',
    '2016-11-25-19-25',
    '2016-11-25-20-25',
    '2016-11-25-21-25',
    '2016-11-25-22-25',
    '2016-11-25-23-25',
    '2016-11-26-00-25',
    '2016-11-26-01-25',
    '2016-11-26-02-25',
    '2016-11-26-03-25',
    '2016-11-26-04-25',
    '2016-11-26-05-25',
    '2016-11-26-06-25',
    '2016-11-26-07-25',
    '2016-11-26-08-25',
    '2016-11-26-09-25',
    '2016-11-26-10-25',
    '2016-11-26-11-25',
    '2016-11-26-12-25',
    '2016-11-26-13-25',
    '2016-11-26-14-25',
    '2016-11-26-15-25',
    '2016-11-26-16-25',
    '2016-11-26-17-25',
    '2016-11-26-18-25',
    '2016-11-26-19-25',
    '2016-11-26-20-25',
    '2016-11-26-21-25',
    '2016-11-26-22-25',
    '2016-11-26-23-25',
    '2016-11-27-00-25',
    '2016-11-27-01-25',
    '2016-11-27-02-25',
    '2016-11-27-03-25',
    '2016-11-27-04-25',
    '2016-11-27-05-25',
    '2016-11-27-06-25',
    '2016-11-27-07-25',
    '2016-11-27-08-25',
    '2016-11-27-09-25',
    '2016-11-27-10-25',
    '2016-11-27-11-25',
    '2016-11-27-12-25',
    '2016-11-27-13-25',
    '2016-11-27-14-25',
    '2016-11-27-15-25',
    '2016-11-27-16-25',
    '2016-11-27-17-25',
    '2016-11-27-18-25',
    '2016-11-27-19-25',
    '2016-11-27-20-25',
    '2016-11-27-21-25',
    '2016-11-27-22-25',
    '2016-11-27-23-25',
    '2016-11-28-00-25',
    '2016-11-28-01-25',
    '2016-11-28-02-25',
    '2016-11-28-03-25',
    '2016-11-28-04-25',
    '2016-11-28-05-25',
    '2016-11-28-06-25',
    '2016-11-28-07-25',
    '2016-11-28-08-25',
    '2016-11-28-09-25',
    '2016-11-28-10-25',
    '2016-11-28-11-25',
    '2016-11-28-12-25',
    '2016-11-28-13-25',
    '2016-11-28-14-25',
    '2016-11-28-15-25',
    '2016-11-28-16-25',
    '2016-11-28-17-25',
    '2016-11-28-18-25',
    '2016-11-28-19-25',
    '2016-11-28-20-25',
    '2016-11-28-21-25',
    '2016-11-28-22-25',
    '2016-11-28-23-25',
    '2016-11-29-00-25',
    '2016-11-29-01-25',
    '2016-11-29-02-25',
    '2016-11-29-03-25',
    '2016-11-29-04-25',
    '2016-11-29-05-25',
    '2016-11-29-06-25',
    '2016-11-29-07-25',
    '2016-11-29-08-25',
    '2016-11-29-09-25',
    '2016-11-29-10-25',
    '2016-11-29-11-25',
    '2016-11-29-12-25',
    '2016-11-29-13-25',
    '2016-11-29-14-25',
    '2016-11-29-15-25',
    '2016-11-29-16-25',
    '2016-11-29-17-25',
    '2016-11-29-18-25',
    '2016-11-29-19-25',
    '2016-11-29-20-25',
    '2016-11-29-21-25',
    '2016-11-29-22-25',
    '2016-11-29-23-25',
    '2016-11-30-00-25',
    '2016-11-30-01-25',
    '2016-11-30-02-25',
    '2016-11-30-03-25',
    '2016-11-30-04-25',
    '2016-11-30-05-25',
    '2016-11-30-06-25',
    '2016-11-30-07-25',
    '2016-11-30-08-25',
    '2016-11-30-09-25',
    '2016-11-30-10-25',
    '2016-11-30-11-25',
    '2016-11-30-12-25',
    '2016-11-30-13-25',
    '2016-11-30-14-25',
    '2016-11-30-15-25',
    '2016-11-30-16-25',
    '2016-11-30-17-25',
    '2016-11-30-18-25',
    '2016-11-30-19-25',
    '2016-11-30-20-25',
    '2016-11-30-21-25',
    '2016-11-30-22-25',
    '2016-11-30-23-25',
    '2016-12-01-00-25',
    '2016-12-01-01-25',
    '2016-12-01-02-25',
    '2016-12-01-03-25',
    '2016-12-01-04-25',
    '2016-12-01-05-25',
    '2016-12-01-06-25',
    '2016-12-01-07-25',
    '2016-12-01-08-25',
    '2016-12-01-09-25',
    '2016-12-01-10-25',
    '2016-12-01-11-25',
    '2016-12-01-12-25',
    '2016-12-01-13-25',
    '2016-12-01-14-25',
    '2016-12-01-15-25',
    '2016-12-01-16-25',
    '2016-12-01-17-25',
    '2016-12-01-18-25',
    '2016-12-01-19-25',
    '2016-12-01-20-25',
    '2016-12-01-21-25',
    '2016-12-01-22-25',
    '2016-12-01-23-25',
    '2016-12-02-08-25',
    '2016-12-02-09-25',
    '2016-12-02-10-25',
    '2016-12-02-11-25',
    '2016-12-02-12-25',
    '2016-12-02-13-25',
    '2016-12-02-14-25',
    '2016-12-02-15-25',
    '2016-12-02-16-25',
    '2016-12-02-17-25',
    '2016-12-02-18-25',
    '2016-12-02-19-25',
    '2016-12-02-20-25',
    '2016-12-02-21-25',
    '2016-12-02-22-25',
    '2016-12-02-23-25',
    '2016-12-03-00-25',
    '2016-12-03-01-25',
    '2016-12-03-02-25',
    '2016-12-03-03-25',
    '2016-12-03-04-25',
    '2016-12-03-05-25',
    '2016-12-03-06-25',
    '2016-12-03-07-25',
    '2016-12-03-08-25',
    '2016-12-03-09-25',
    '2016-12-03-10-25',
    '2016-12-03-11-25',
    '2016-12-03-12-25',
    '2016-12-03-13-25',
    '2016-12-03-14-25',
    '2016-12-03-15-25',
    '2016-12-03-16-25',
    '2016-12-03-17-25',
    '2016-12-03-18-25',
    '2016-12-03-19-25',
    '2016-12-03-20-25',
    '2016-12-03-21-25',
    '2016-12-03-22-25',
    '2016-12-03-23-25',
    '2016-12-04-00-25',
    '2016-12-04-01-25',
    '2016-12-04-02-25',
    '2016-12-04-03-25',
    '2016-12-04-04-25',
    '2016-12-04-05-25',
    '2016-12-04-06-25',
    '2016-12-04-07-25',
    '2016-12-04-08-25',
    '2016-12-04-09-25',
    '2016-12-04-10-25',
    '2016-12-04-11-25',
    '2016-12-04-12-25',
    '2016-12-04-13-25',
    '2016-12-04-14-25',
    '2016-12-04-15-25',
    '2016-12-04-16-25',
    '2016-12-04-17-25',
    '2016-12-04-18-25',
    '2016-12-04-19-25',
    '2016-12-04-20-25',
    '2016-12-04-21-25',
    '2016-12-04-22-25',
    '2016-12-04-23-25',
    '2016-12-05-00-25',
    '2016-12-05-01-25',
    '2016-12-05-02-25',
    '2016-12-05-03-25',
    '2016-12-05-04-25',
    '2016-12-05-05-25',
    '2016-12-05-06-25',
    '2016-12-05-07-25',
    '2016-12-05-08-25',
    '2016-12-05-09-25',
    '2016-12-05-10-25',
    '2016-12-05-11-25',
    '2016-12-05-12-25',
    '2016-12-05-13-25',
    '2016-12-05-14-25',
    '2016-12-05-15-25',
    '2016-12-05-16-25',
    '2016-12-05-17-25',
    '2016-12-05-18-25',
    '2016-12-05-19-25',
    '2016-12-05-20-25',
    '2016-12-05-21-25',
    '2016-12-05-22-25',
    '2016-12-05-23-25',
    '2016-12-06-00-25',
    '2016-12-06-08-25',
    '2016-12-06-09-25',
    '2016-12-06-10-25',
    '2016-12-06-11-25',
    '2016-12-06-12-25',
    '2016-12-06-13-25',
    '2016-12-06-14-25',
    '2016-12-06-15-25',
    '2016-12-06-16-25',
    '2016-12-06-17-25',
    '2016-12-06-18-25',
    '2016-12-06-19-25',
    '2016-12-06-20-25',
    '2016-12-06-21-25',
    '2016-12-06-22-25',
    '2016-12-06-23-25',
    '2016-12-07-00-25',
    '2016-12-07-01-25',
    '2016-12-07-02-25',
    '2016-12-07-03-25',
    '2016-12-07-04-25',
    '2016-12-07-05-25',
    '2016-12-07-06-25',
    '2016-12-07-07-25',
    '2016-12-07-08-25',
    '2016-12-07-09-25',
    '2016-12-07-10-25',
    '2016-12-07-11-25',
    '2016-12-07-12-25',
    '2016-12-07-13-25',
    '2016-12-07-14-25',
    '2016-12-07-15-25',
    '2016-12-07-16-25',
    '2016-12-07-17-25',
    '2016-12-07-18-25',
    '2016-12-07-19-25',
    '2016-12-07-20-25',
    '2016-12-07-21-25',
    '2016-12-07-22-25',
    '2016-12-07-23-25',
    '2016-12-08-00-25',
    '2016-12-08-01-25',
    '2016-12-08-02-25',
    '2016-12-08-03-25',
    '2016-12-08-04-25',
    '2016-12-08-05-25',
    '2016-12-08-06-25',
    '2016-12-08-07-25',
    '2016-12-08-08-25',
    '2016-12-08-09-25',
    '2016-12-08-10-25',
    '2016-12-08-11-25',
    '2016-12-08-12-25',
    '2016-12-08-13-25',
    '2016-12-08-14-25',
    '2016-12-08-15-25',
    '2016-12-08-16-25',
    '2016-12-08-17-25',
    '2016-12-08-18-25',
    '2016-12-08-19-25',
    '2016-12-08-20-25',
    '2016-12-08-21-25',
    '2016-12-08-22-25',
    '2016-12-08-23-25',
    '2016-12-09-00-25',
    '2016-12-09-01-25',
    '2016-12-09-02-25',
    '2016-12-09-03-25',
    '2016-12-09-04-25',
    '2016-12-09-05-25',
    '2016-12-09-06-25',
    '2016-12-09-07-25',
    '2016-12-09-08-25',
    '2016-12-09-09-25',
    '2016-12-09-10-25',
    '2016-12-09-11-25',
    '2016-12-09-12-25',
    '2016-12-09-13-25',
    '2016-12-09-14-25',
    '2016-12-09-15-25',
    '2016-12-09-16-25',
    '2016-12-09-17-25',
    '2016-12-09-18-25',
    '2016-12-09-19-25',
    '2016-12-09-20-25',
    '2016-12-09-21-25',
    '2016-12-09-22-25',
    '2016-12-09-23-25',
    '2016-12-10-00-25',
    '2016-12-10-01-25',
    '2016-12-10-02-25',
    '2016-12-10-03-25',
    '2016-12-10-04-25',
    '2016-12-10-05-25',
    '2016-12-10-06-25',
    '2016-12-10-07-25',
    '2016-12-10-08-25',
    '2016-12-10-09-25',
    '2016-12-10-10-25',
    '2016-12-10-11-25',
    '2016-12-10-12-25',
    '2016-12-10-13-25',
    '2016-12-10-14-25',
    '2016-12-10-15-25',
    '2016-12-10-16-25',
    '2016-12-10-17-25',
    '2016-12-10-18-25',
    '2016-12-10-19-25',
    '2016-12-10-20-25',
    '2016-12-10-21-25',
    '2016-12-10-22-25',
    '2016-12-10-23-25',
    '2016-12-11-00-25',
    '2016-12-11-01-25',
    '2016-12-11-02-25',
    '2016-12-11-03-25',
    '2016-12-11-04-25',
    '2016-12-11-05-25',
    '2016-12-11-06-25',
    '2016-12-11-07-25',
    '2016-12-11-08-25',
    '2016-12-11-09-25',
    '2016-12-11-10-25',
    '2016-12-11-11-25',
    '2016-12-11-12-25',
    '2016-12-11-13-25',
    '2016-12-11-14-25',
    '2016-12-11-15-25',
    '2016-12-11-16-25',
    '2016-12-11-17-25',
    '2016-12-11-18-25',
    '2016-12-11-19-25',
    '2016-12-11-20-25',
    '2016-12-11-21-25',
    '2016-12-11-22-25',
    '2016-12-11-23-25',
    '2016-12-12-00-25',
    '2016-12-12-01-25',
    '2016-12-12-02-25',
    '2016-12-12-03-25',
    '2016-12-12-04-25',
    '2016-12-12-05-25',
    '2016-12-12-06-25',
    '2016-12-12-07-25',
    '2016-12-12-08-25',
    '2016-12-12-09-25',
    '2016-12-12-10-25',
    '2016-12-12-11-25',
    '2016-12-12-12-25',
    '2016-12-12-13-25',
    '2016-12-12-14-25',
    '2016-12-12-15-25',
    '2016-12-12-16-25',
    '2016-12-12-17-25',
    '2016-12-12-18-25',
    '2016-12-12-19-25',
    '2016-12-12-20-25',
    '2016-12-12-21-25',
    '2016-12-12-22-25',
    '2016-12-12-23-25',
    '2016-12-13-00-25',
    '2016-12-13-01-25',
    '2016-12-13-02-25',
    '2016-12-13-03-25',
    '2016-12-13-04-25',
    '2016-12-13-05-25',
    '2016-12-13-06-25',
    '2016-12-13-07-25',
    '2016-12-13-08-25',
    '2016-12-13-09-25',
    '2016-12-13-10-25',
    '2016-12-13-11-25',
    '2016-12-13-12-25',
    '2016-12-13-13-25',
    '2016-12-13-14-25',
    '2016-12-13-15-25',
    '2016-12-13-16-25',
    '2016-12-13-17-25',
    '2016-12-13-18-25',
    '2016-12-13-19-25',
    '2016-12-13-20-25',
    '2016-12-13-21-25',
    '2016-12-13-22-25',
    '2016-12-13-23-25',
    '2016-12-14-00-25',
    '2016-12-14-01-25',
    '2016-12-14-02-25',
    '2016-12-14-03-25',
    '2016-12-14-04-25',
    '2016-12-14-05-25',
    '2016-12-14-06-25',
    '2016-12-14-07-25',
    '2016-12-14-08-25',
    '2016-12-14-09-25',
    '2016-12-14-10-25',
    '2016-12-14-11-25',
    '2016-12-14-12-25',
    '2016-12-14-13-25',
    '2016-12-14-14-25',
    '2016-12-14-15-25',
    '2016-12-14-16-25',
    '2016-12-14-17-25',
    '2016-12-14-18-25',
    '2016-12-14-19-25',
    '2016-12-14-20-25',
    '2016-12-14-21-25',
    '2016-12-14-22-25',
    '2016-12-14-23-25',
    '2016-12-15-00-25',
    '2016-12-15-01-25',
    '2016-12-15-02-25',
    '2016-12-15-03-25',
    '2016-12-15-04-25',
    '2016-12-15-05-25',
    '2016-12-15-06-25',
    '2016-12-15-07-25',
    '2016-12-15-08-25',
    '2016-12-15-09-25',
    '2016-12-15-10-25',
    '2016-12-15-11-25',
    '2016-12-15-12-25',
    '2016-12-15-13-25',
    '2016-12-15-14-25',
    '2016-12-15-15-25',
    '2016-12-15-16-25',
    '2016-12-15-17-25',
    '2016-12-15-18-25',
    '2016-12-15-19-25',
    '2016-12-15-20-25',
    '2016-12-15-21-25',
    '2016-12-15-22-25',
    '2016-12-15-23-25',
    '2016-12-16-00-25',
    '2016-12-16-01-25',
    '2016-12-16-02-25',
    '2016-12-16-03-25',
    '2016-12-16-04-25',
    '2016-12-16-05-25',
    '2016-12-16-06-25',
    '2016-12-16-07-25',
    '2016-12-16-08-25',
    '2016-12-16-09-25',
    '2016-12-16-10-25',
    '2016-12-16-11-25',
    '2016-12-16-12-25',
    '2016-12-16-13-25',
    '2016-12-16-14-25',
    '2016-12-16-15-25',
    '2016-12-16-16-25',
    '2016-12-16-17-25',
    '2016-12-16-18-25',
    '2016-12-16-19-25',
    '2016-12-16-20-25',
    '2016-12-16-21-25',
    '2016-12-16-22-25',
    '2016-12-16-23-25',
    '2016-12-17-00-25',
    '2016-12-17-01-25',
    '2016-12-17-09-25',
    '2016-12-17-10-25',
    '2016-12-17-11-25',
    '2016-12-17-12-25',
    '2016-12-17-13-25',
    '2016-12-17-14-25',
    '2016-12-17-15-25',
    '2016-12-17-16-25',
    '2016-12-17-17-25',
    '2016-12-17-18-25',
    '2016-12-17-19-25',
    '2016-12-17-20-25',
    '2016-12-17-21-25',
    '2016-12-17-22-25',
    '2016-12-17-23-25',
    '2016-12-18-00-25',
    '2016-12-18-01-25',
    '2016-12-18-02-25',
    '2016-12-18-03-25',
    '2016-12-18-04-25',
    '2016-12-18-05-25',
    '2016-12-18-06-25',
    '2016-12-18-07-25',
    '2016-12-18-08-25',
    '2016-12-18-09-25',
    '2016-12-18-10-25',
    '2016-12-18-11-25',
    '2016-12-18-12-25',
    '2016-12-18-13-25',
    '2016-12-18-14-25',
    '2016-12-18-15-25',
    '2016-12-18-16-25',
    '2016-12-18-17-25',
    '2016-12-18-18-25',
    '2016-12-18-19-25',
    '2016-12-18-20-25'
];

$mega = [];

$csv = '';

$realT = [];

function parseFile($day) {

    global $mega, $csv, $realT;
    $predicts = [];

    $html = file_get_html(__DIR__ . '/test/' . $day);
    foreach($html->find('.forecast-brief_cols_10') as $element) {
        foreach ($element->find('.forecast-brief__item-temp-day') as $s) {
            $predicts[] = str_replace('−', '-', $s->plaintext);
        }
    }

    $dayDate = date_create_from_format("Y-m-d-H-i", $day);
    $dayDateString = date_format($dayDate, 'Y-m-d H:i:s');
    $dayArr = explode('-', $day);

    if ($dayArr[3] == 14) {
        foreach($html->find('.current-weather__thermometer_type_now') as $s) {
            $realT[] = [
                intval(date_format($dayDate, 'U') . '000'),
                intval(str_replace('−', '-', $s->plaintext))
            ];
        }
    }

    for ($i = 1; $i < count($predicts); $i++) {

        $nextDay = date('Y-m-d', strtotime('+' . $i . ' day', strtotime($dayDateString)));
        $nextDayArr = explode('-', $nextDay);

        $line = [
            'Y' => $dayArr[0],
            'm' => $dayArr[1],
            'd' => $dayArr[2],
            'H' => $dayArr[3],
            'i' => $dayArr[4],
            '_m' => $nextDayArr[1],
            '_d' => $nextDayArr[2],
            '_C' => $predicts[$i]
        ];

        $mega[] = $line;
        $csv .= join(';', array_values($line)) . "\n";
    }

}

foreach ($files as $d) {
    parseFile($d);
}

$predict_area = [];

foreach ($mega as $key_m => $m) {

    $k = date_format(
        date_create_from_format("Y-m-d-H-i",
            $m['Y'].'-'.$m['_m'].'-'.$m['_d'].'-14-25'),
        'U') . '000';

    $mega[$key_m]['U'] = intval($k);

    $kAccurate = date_format(
        date_create_from_format("Y-m-d-H-i",
            $m['Y'].'-'.$m['m'].'-'.$m['d'].'-'.$m['H'].'-'.$m['i']),
        'U') . '000';

    $mega[$key_m]['kAccurate'] = intval($kAccurate);

    if (!array_key_exists($k, $predict_area)) {
        $predict_area[$k] = [100, -100];
    }

    if ($m['_C'] < $predict_area[$k][0]) {
        $predict_area[$k][0] = $m['_C'];
    }

    if ($m['_C'] > $predict_area[$k][1]) {
        $predict_area[$k][1] = $m['_C'];
    }
}

$predict_area_export = [];
foreach ($predict_area as $key => $value) {
    $predict_area_export[] = [
        $key,
        intval($value[0]),
        intval($value[1])
    ];
}

usort($predict_area_export, function ($a, $b) {
    return ($a < $b) ? -1 : 1;
});

file_put_contents('pogoda_yandex.csv', $csv);

file_put_contents('pogoda_yandex.js', 'var yandex = ' . json_encode($mega) . ';');

file_put_contents('pogoda-real.js', 'var real = ' . json_encode($realT) . ';');

file_put_contents('pogoda-ranges.js', 'var ranges = ' . json_encode($predict_area_export) . ';');

