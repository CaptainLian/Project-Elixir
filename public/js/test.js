
var activityNames = ['Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
  'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii',
  'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana',
  'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota',
  'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
  'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota',
  'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
  'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont',
  'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'
];

var category = ['Liner Programming', 'Database', 'Networking', 'OOP', 'Asyncronous Programming',
  'Security', 'Web Development', 'Mobile Development', 'System Integration', 'Low Level Programming'
];


myObj = { "name":"John", "age":31, "city":"New York" };

test = {
    "activities": {
        "specific": [
            {"activityName":"Sentra", "category":"Linear Programming"},
            {"activityName":"Maxima", "category":4},
             {"activityName":"Apricot", "category":4},
        ]
    }
}
myJSON = JSON.stringify(test);
localStorage.setItem("testJSON", myJSON);

text = localStorage.getItem("testJSON");
obj = JSON.parse(text);
console.log(obj.activities.specific);



var activityName = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  
  local: obj.activities.specific
});







$('#the-basics .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'activityName',
  source: activityName.activityName,
   templates: {
    empty: [
      '<div class="empty-message">',
        'Sorry! No matches found for your search',
      '</div>'
    ].join('\n'),
    suggestion: function(data){
      console.log(data);
      return '<p><strong>' + data.activityName + '</strong> - ' + data.category + '</p>';
}

  }
});



$('#the-basic .typeahead').typeahead({
  hint: true,
  highlight: true,
  minLength: 1
},
{
  name: 'activityName',
  source: activityName,
   templates: {
    empty: [
      '<div class="empty-message">',
        'Sorry! No matches found for your search',
      '</div>'
    ].join('\n'),
    suggestion: function(data){

      return '<p><strong>' + obj.activities + '</strong> - ' + obj.age + '</p>';
}

  }
});



