limit = int(input('Give a number plaese '))
a = ['s','Hello','water','fruit',2,3,4,5,2,3,1,1,2,3,True,False]

print(a)
print(len(a))
print(a[0])
print(a[0:3])
print(a[0:len(a)])
print(a[0:limit])
print(a[limit])

#Its used to add values to finish list 
a.append("Juank")
#Its used to add values to finish list but, it is separate by commas
a.extend('Monik')

print(a)
# It's to count equal values into a list 
print(a.count(0))
# Return index value from element  
print(a.index('Juank'))
# Its delete the last element from a list 
print(a.pop())
print(a)
#Its to remove a element from a list 
a.remove('Juank')
print(a)
# Its to revert the list  
a.reverse()
print(a)

#Its to order the list, only if its the same type of data  
#a.sort()
#print(a)

#Its to join elements into a list 
c = ['M','O','N','I','K']
print(''.join(c))





