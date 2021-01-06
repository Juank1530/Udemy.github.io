limit = int(input('Introduce a number'))
a = ['S','Hello','Watter','frut',1,2,3,4,3.1,4.1,5.1,True,False]
#Here we are printing lengt of list o array 
print('the list has',len(a),'elements')
#Here we are printing a range into the list or array 
print(a[0:3])
#Here we are printing a range wiht user input
print(a[0:limit])
#Here we are printing the las value
print(a[-1])
#Here we are changing the value to the first element into the list 
print(a)
a[0]='t'
print(a)
#Here we are adding values at list just the end of the list  
a.append('juank')
print(a)
#Here we are counting the values into the list not the extension of list 
print(a.count('juank'))
#Here we are adding values at list just the end of the list
a.extend([3])
print(a)
#Here we are getting index a specifict elemet 
print(a.index('Watter'))
#Here we are setting a index value into the variable to use it later 
indexElement = a.index('Watter')
#Here we are using the variable 
print(a[indexElement])
#Here we are deletting the last element
print(a.pop())
print(a)
#Here we are removieng values of the list 
a.remove('juank')
print(a)
#The method reverse() is to invert the list order  
print(a.reverse())
b = a.reverse()
print(b)
#The method sort() is to organice the list  
#The method join() is to join elemet in a unique string 
c = ['He','llo']
print(''.join(c))


#  class list(object)
#  list(iterable=(), /)
#
#  Built-in mutable sequence.
#
#  If no argument is given, the constructor creates a new empty list.
#  The argument must be an iterable if specified.
#
#  Methods defined here:
#
#  __add__(self, value, /)
#      Return self+value.
#
#  __contains__(self, key, /)
#      Return key in self.
#
#  __delitem__(self, key, /)
#      Delete self[key].
#
#  __eq__(self, value, /)
#      Return self==value.
#
#  __ge__(self, value, /)
#      Return self>=value.
#
#  __getattribute__(self, name, /)
#      Return getattr(self, name).
#
#  __getitem__(...)
#      x.__getitem__(y) <==> x[y]
#
#  __gt__(self, value, /)
#      Return self>value.
#
#  __iadd__(self, value, /)
#      Implement self+=value.
#
#  __imul__(self, value, /)
#      Implement self*=value.
#
#  __init__(self, /, *args, **kwargs)
#      Initialize self.  See help(type(self)) for accurate signature.
#
#  __iter__(self, /)
#      Implement iter(self).
#
#  __le__(self, value, /)
#      Return self<=value.
#
#  __len__(self, /)
#      Return len(self).
#
#  __lt__(self, value, /)
#      Return self<value.
#
#  __mul__(self, value, /)
#      Return self*value.
#
#  __ne__(self, value, /)
#      Return self!=value.
#
#  __repr__(self, /)
#      Return repr(self).
#
#  __reversed__(self, /)
#      Return a reverse iterator over the list.
#
#  __rmul__(self, value, /)
#      Return value*self.
#
#  __setitem__(self, key, value, /)
#      Set self[key] to value.
#
#  __sizeof__(self, /)
#      Return the size of the list in memory, in bytes.
#
#  append(self, object, /)
#      Append object to the end of the list.
#
#  clear(self, /)
#      Remove all items from list.
#
#  copy(self, /)
#      Return a shallow copy of the list.
#
#  count(self, value, /)
#      Return number of occurrences of value.
#
#  extend(self, iterable, /)
#      Extend list by appending elements from the iterable.
#
#  index(self, value, start=0, stop=9223372036854775807, /)
#      Return first index of value.
#
#      Raises ValueError if the value is not present.
#
#  insert(self, index, object, /)
#      Insert object before index.
#
#  pop(self, index=-1, /)
#      Remove and return item at index (default last).
#
#      Raises IndexError if list is empty or index is out of range.
#
#  remove(self, value, /)
#      Remove first occurrence of value.
#
#      Raises ValueError if the value is not present.
#
#  reverse(self, /)
#      Reverse *IN PLACE*.
#
#  sort(self, /, *, key=None, reverse=False)
#      Sort the list in ascending order and return None.
#
#      The sort is in-place (i.e. the list itself is modified) and stable (i.e. the
#      order of two equal elements is maintained).
#
#      If a key function is given, apply it once to each list item and sort them,
#      ascending or descending, according to their function values.
#
#       The reverse flag can be set to sort in descending order.


