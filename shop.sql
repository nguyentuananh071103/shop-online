create
database `shop-online`;
use
`shop-online`;

create table `categories`
(
    id int primary key autoincrement,
    name varchar(50)
);

create table `products`
(
    id int primary key auto autoincrement,
    name varchar(50),
    price varchar(50),
    description text
);

create table `category_product`(
    id int primary key auto_increment,
    category_id int,
    product_id int,
    foreign key (category_id) references categories(id),
    foreign key (product_id) references products(id),
);

insert into `products` (`name`, `price`, `description`) values
("Nike","200000","giay de hoi cao, gia hoi re"),
("Puma`,"200000","giay de hoi cao, gia hoi re"),
("Adidas Fake loai 1","500000","giay de hoi cao, gia hoi re"),
("Thuong Dinh Auth","1000000","hang viet nam, chat luong khong biet"),
("Kappa Do","200000","giay cua xuan toc do"),
("To Ong"","10000","dep me mua, nem bach phat bach trung")

insert into `categories`(`name`) values
("Adidas"), ("Puma"), ("VNShoes"), ("Nike")

insert into `category_produc` (`category_id`, `product_id`) values
(1,3),(1,2),(1,4)

SELECT categories.name,products.* FROM `categories`
     INNER JOIN `category_product` ON categories.id = category_product.category_id
     INNER JOIN `products` ON category_product.product_id = products.id
WHERE categories.id = 2
