import { useLocation, Link } from 'react-router-dom';

export default function CategoryLink({ name }) {
  const path = `/${name.toLowerCase()}`;
  const isActive = useLocation().pathname === path;

  return (
    <Link
      to={path}
      data-testid={isActive ? 'active-category-link' : 'category-link'}
      className={`relative uppercase text-sm tracking-wider pb-6 transition-colors ${
        isActive ? 'text-green-300' : 'text-gray-700 hover:text-brand'
      }`}
    >
      {name}
      {isActive && (
        <span className="absolute left-0 -bottom-0.5 w-full h-[2px] bg-brand" />
      )}
    </Link>
  );
}
