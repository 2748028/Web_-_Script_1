var myPlaces = ['Paris', 'New York', 'Barcelona'];
var friendPlaces = ['Rome', 'Chicago', 'Paris'];

for (var i = 0; i < myPlaces.length; i++) 
{
    console.log(myPlaces[i]);
 		
  for (var j = 0; j < friendPlaces; j++)
    {
      console.log(friendPlaces[j]);
      
      if (myPlaces[i] === friendPlaces[j])
        {
          console.log('We made it!' + myPlaces[i]);
        }
      else 
        {
          console.log('Develop some taste!');
        }
    }
}