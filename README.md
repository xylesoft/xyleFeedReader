XyleFeedReader
==============

RSS/ATOM/Feed aggregator interface.

Features
--------

+ The ability to create a new XyleFeedReader object, give it the URL and it should autodetect its API based on the mime type, if the mime type fails
then will check the XML document for further ideas.
+ The ability to request a feed, which loads into a collection of entries, which can also request the entries article URL, download and store
it in the entry.
+ The functionality to simply add your own feed parser to populate one or more entries
+ The functionality to add  your HTTP interface, standard will be cURL.
+ Simple API to access the feed and their entries.
+ PHP 5.3+
+ PSR-0 Compliant.

RFC's and compliancy
--------------------

Atom Publishing Protocol: http://bitworking.org/projects/atom/rfc5023.html
Atom Syndication Format RFC: http://tools.ietf.org/html/rfc4287
RSS Wiki: http://en.wikipedia.org/wiki/RSS
Atom Wiki: http://en.wikipedia.org/wiki/Atom_(standard)