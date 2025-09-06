import { ApolloClient, InMemoryCache, HttpLink } from '@apollo/client';

const httpLink = new HttpLink({
  uri: import.meta.env.VITE_GRAPHQL_ENDPOINT, 
});

export const client = new ApolloClient({
  link: httpLink,
  cache: new InMemoryCache(),
});
