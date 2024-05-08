### API
```shell
php artisan l5-swagger:generate
```
### Structure
## VN
```VN
Cấu trúc thư mục của bạn đã bắt đầu phản ánh kiến trúc Clean Architecture, với sự tách biệt rõ ràng giữa các thành phần cốt lõi của ứng dụng. Dưới đây là một giải thích về mỗi thư mục trong cấu trúc của mình:

Controller: Thư mục này chứa các Controllers của ứng dụng, những nơi mà yêu cầu từ phía người dùng được nhận và xử lý trước khi chuyển tiếp đến các thành phần khác của ứng dụng. Trong kiến trúc Clean Architecture, Controllers thường chỉ chịu trách nhiệm điều hướng yêu cầu và không chứa logic kinh doanh.

Driver: Thư mục này có thể chứa các thành phần liên quan đến việc tương tác với các công nghệ ngoại vi như cơ sở dữ liệu, giao diện người dùng, hoặc các dịch vụ bên ngoài. Trong một ứng dụng PHP, Driver có thể chứa các thành phần liên quan đến việc tương tác với cơ sở dữ liệu như các Repository hoặc các lớp truy vấn.

Entity: Thư mục này chứa các Entities của ứng dụng, là các đối tượng biểu diễn cho các khái niệm quan trọng trong miền của ứng dụng. Entities thường là các đối tượng có trạng thái và chứa logic kinh doanh. Chúng không phụ thuộc vào bất kỳ thành phần nào khác trong hệ thống.

UseCase: Thư mục này chứa các Use Cases của ứng dụng, là nơi chứa logic kinh doanh chính của ứng dụng. Mỗi Use Case thường thực hiện một chức năng cụ thể của ứng dụng và không phụ thuộc vào bất kỳ thành phần cụ thể nào bên ngoài Use Case đó.
```
## EN
```EN
Your folder structure should begin to reflect the Clean Architecture, with clear separation between the core components of your application. Below is an explanation of each folder in its structure:

Controller: This directory contains the application's Controllers, where requests from the user are received and processed before being forwarded to other components of the application. In a Clean Architecture, Controllers are typically only responsible for directing requests and do not contain business logic.

Driver: This directory may contain components related to interacting with peripheral technologies such as databases, user interfaces, or external services. In a PHP application, Driver can contain components related to interacting with the database such as Repositories or query classes.

Entity: This directory contains application Entities, which are objects that represent important concepts in the application's domain. Entities are typically stateful objects and contain business logic. They do not depend on any other component in the system.

UseCase: This folder contains the application's Use Cases, which contain the main business logic of the application. Each Use Case typically performs a specific function of the application and does not depend on any specific component outside that Use Case.
```
