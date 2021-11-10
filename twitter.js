

var Twitter = require('twitter');


	var client = new Twitter({
		consumer_key: "DWSo0z5hDjkaWZ0PD8VATF55U",
		consumer_secret: "FLN2Gee6hbmmIVmsMCjY2NGCpWN42oc3kMhTh5VEhrjpgLTLab",
		access_token_key: "1121123177013370882-30lJ5nMmbPqAk5dZ4IL4lRDIrH2WT1",
		access_token_secret: "PH7ghHSf4PgxqY4EQOtdmy3rmPRO7lGwXVfQH0hnfPGqL"
		});

client.post('statuses/update', {status: 'I Love Twitter'},  function(error, tweet, response) {
  if(error) throw error;
  console.log(tweet);
});