$(document).ready(function(e){

  gapi.client.setApiKey('AIzaSyBLjWeAs5h6K6MuvBkcwsWaypMFL12pFBQ');
  gapi.client.load('youtube', 'v3', function() {
    makeRequest();
  });
});

  $('.col-4').empty();

var commonVars = {};
var q = $('#getVid').text();
function makeRequest(b) {
  var request = gapi.client.youtube.search.list({
    q: q,
    part: 'snippet',
    maxResults: 6,
    pageToken: b
  });
  request.execute(function(response) {
    //alert(JSON.stringify(response, '', 2))
    $('#results').empty();
    var srchItems = response.result.items;
    $.each(srchItems, function(index, item) {
      console.log(item);
      var title = item.snippet.title;
      var vidID = item.id.videoId;
      var shortTitle =    title.substring(0, 30);

      commonVars.next = response.nextPageToken;
      commonVars.prev = response.prevPageToken;
      vidThumburl = item.snippet.thumbnails.medium.url;
      
     output = '<div class="col-sm-4" id="vidDiv"><div class="title"><a target="_blank" style="font-weight: bold" href="https://youtube.com/watch?v=' + vidID + '">' + shortTitle + '</a></div><br><iframe src="https://www.youtube.com/embed/' + vidID + '" style="height:300px"></iframe></div>';
      $('#results').append(output);
      $('h1, #next, #prev').removeClass('hidden');
    })
  })
}


$('#next').on("click", function() {
  makeRequest(commonVars.next);
})

$('#prev').on("click", function() {
  makeRequest(commonVars.prev);
})


