#STARTMAIL

- url : {{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}
- bien : {{ $property->title }}

- prénom : {{ $data['firstname'] }}
- nom : {{ $data['lastname'] }}
- téléphone : {{ $data['phone'] }}
- email : {{ $data['email'] }}
- message : {{ $data['message'] }}

#ENDMAIL
