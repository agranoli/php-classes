// Online C++ compiler to run C++ program online
#include <iostream>
#include <string>

using namespace std;

class Vehicle{
    public:
        string brand;
        Vehicle(string brand) {
            this->brand = brand;
        }
        Vehicle(int mleage){
            this->mileage = mileage;
        }
        Vehicle(string brand, int mileage) {
            this->brand = brand;
            this->mileage = mileage;
        }
        ~Vehicle() {
            cout << this->brand << " is dead" <<endl;
        }
        virtual void makeNoise() = 0;

    private:
        int mileage = 0;
};


class Car : public Vehicle {
public:
    Car(string brand) : Vehicle(brand) {
    };
    Car(int mileage) : Vehicle(mileage){

    };
    Car(string brand, int mileage) : Vehicle (brand, mileage){
    };
    void makeNoise(){
        cout << "Beep beep, Imzi \n";
    }
};

int main() {
    Car myCar("Dacia", 19200);
    Car* myCar2 = new Car (19200);
    delete myCar2;
    cout << "Hello world! \n";

    return 0;
}