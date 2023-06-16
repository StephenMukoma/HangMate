# HangMate
ALX MVP

## User Stories
- Find hangout places in a city: As someone who goes out with family and friends, I want to find places easily in the city I’m in.
- Keeping to budget: As an individual who goes out with family and friends, I want to stick to my budget whenever I’m out with friends and family.
- Expand client base: As a place owner, I want to expand my client base to individuals who are yet to discover it.

## API’s

Below are the API routes for the web client to communicate with the web servers

- /api/v1/users
  GET: Returns a list of all users
  POST: Adds a new user

- /api/v1/users/{username}
  GET: Returns the user’s information for a specific username
  PUT: Updates the user’s information for a specific username
  DELETE: Deletes the user for a specific username

- /api/v1/users/{username}/places
  GET: Returns list of places accessed by the user

- /api/v1/owners
  GET: Returns a list of all place owners

- /api/v1/places
  GET: Returns list of all places
  POST: Adds a new place
  PUT: Updates a place

- /api/v1/{owner_id}/places
  GET: Returns a list of places owned by a specific user
  POST: Registers a new place for  a specific owner

- /api/v1/reviews
  GET: returns all reviews

- /api/v1/reviews/{place_id}
  GET: Returns reviews for a specific place
  3rd Party APIs
  Google Identity Services Authorization API. This will be used to allow users to sign up and sign in using their Google accounts if they so wish.
