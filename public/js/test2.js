var data = [
{
category1: 'category 1',
docs:['doc1', 'doc2', 'doc3']
},
{
category2: 'category 2',
docs:['doc4', 'doc5', 'doc6']
},
];

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



var activityName = new Bloodhound({
  datumTokenizer: Bloodhound.tokenizers.whitespace,
  queryTokenizer: Bloodhound.tokenizers.whitespace,
  
  local: activityNames
});







$('#the-basics .typeahead').typeahead({
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
  
  }
});

