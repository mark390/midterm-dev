<?php

    function get_vehicles() {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        }
    
    function get_vehicle_by_selector($sorter, $makeid, $typeid, $classid) {
        if ($sorter == 'Year' && $makeid && $typeid && $classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID
            AND V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':sorter', $sorter);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && !$typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && !$typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && $makeid && !$typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && $makeid && $typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && $makeid && !$typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && $makeid && $typeid && !$classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Year' && !$makeid && $typeid && $classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID AND V.class_id = :classID ORDER BY year DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && $typeid && $classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        } elseif ($sorter == 'Price' && !$makeid && $typeid && $classid) {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':classID', $classid);
            $statement->bindValue(':typeID', $typeid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        
        
        
        
        
        
        
        
        
        else {
            global $db;
            $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
            LEFT JOIN make M on V.make_id = M.ID
            LEFT JOIN type T on V.type_id = T.ID
            LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID AND V.type_id = :typeID
            AND V.class_id = :classID ORDER BY price DESC';
            $statement = $db->prepare($query);
            $statement->bindValue(':sorter', $sorter);
            $statement->bindValue(':makeID', $makeid);
            $statement->bindValue(':typeID', $typeid);
            $statement->bindValue(':classID', $classid);
            $statement->execute();
            $vehicles = $statement->fetchAll();
            $statement->closeCursor();
            return $vehicles;
        }
}
    
    // function get_Make($makeID, $sorter) {
    //     if ($sorter == 'Year') {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY year DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':makeID', $makeID);
    //         $statement->execute();
    //         $make = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $make;
    //     } else {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.make_id = :makeID ORDER BY price DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':makeID', $makeID);
    //         $statement->execute();
    //         $make = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $make;
    //     }
    // }

    // function get_Type($typeID, $sorter) {
    //     if ($sorter == 'Year') {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID ORDER BY year DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':typeID', $typeID);
    //         $statement->execute();
    //         $types = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $types;
    //     } else {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.type_id = :typeID ORDER BY price DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':typeID', $typeID);
    //         $statement->execute();
    //         $types = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $types;
    //     }

    // function get_Class($classID) {
    //    if ($sorter == 'Year') {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.class_id = :classID ORDER BY year DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':classID', $classID);
    //         $statement->execute();
    //         $classes = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $classes;
    //     } else {
    //         global $db;
    //         $query = 'SELECT V.year, M.make, V.model, T.type, C.class, V.price FROM vehicles V
    //         LEFT JOIN make M on V.make_id = M.ID
    //         LEFT JOIN type T on V.type_id = T.ID
    //         LEFT JOIN class C on V.class_id = C.ID WHERE V.class_id = :classID ORDER BY price DESC';
    //         $statement = $db->prepare($query);    
    //         $statement->bindValue(':classID', $classID);
    //         $statement->execute();
    //         $classes = $statement->fetchAll();
    //         $statement->closeCursor();
    //         return $classes;
    //     }

    function delete_vehicle($vehicleID) {
        global $db;
        $query = 'DELETE * FROM vehicles WHERE vehicle_id = :vehicleID';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleID', $vehicleID);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_make($makeID) {
        global $db;
        $query = 'DELETE * FROM make WHERE ID = :makeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':makeID', $makeID);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_type($typeID) {
        global $db;
        $query = 'DELETE * FROM type WHERE ID = :typeID';
        $statement = $db->prepare($query);
        $statement->bindValue(':typeID', $typeID);
        $statement->execute();
        $statement->closeCursor();
    }

    function delete_class($classID) {
        global $db;
        $query = 'DELETE * FROM class WHERE ID = :classID';
        $statement = $db->prepare($query);
        $statement->bindValue(':vehicleID', $vehicleID);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_vehicle($new_year, $new_model, $new_price, $new_typeID, $new_classID, $new_makeID) {
        global $db;
        $query = 'INSERT INTO vehicles (year, model, price, type_id, class_id, make_id) VALUES (:year, :model, :price, :type_id, :class_id, :make_id)';
        $statement = $db->prepare($query);
        $statement->bindValue(':year', $new_year);
        $statement->bindValue(':model', $new_model);
        $statement->bindValue(':price', $new_price);
        $statement->bindValue(':type_id', $new_type_ID);
        $statement->bindValue(':class_id', $new_class_ID);
        $statement->bindValue(':make_id', $new_make_ID);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_make($new_make) {
        global $db;
        $query = 'INSERT INTO make (Make) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_make);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_type($new_type) {
        global $db;
        $query = 'INSERT INTO type (Type) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_type);
        $statement->execute();
        $statement->closeCursor();
    }

    function add_class($new_class) {
        global $db;
        $query = 'INSERT INTO class (Class) VALUES (:new)';
        $statement = $db->prepare($query);
        $statement->bindValue(':new', $new_class);
        $statement->execute();
        $statement->closeCursor();
    }
