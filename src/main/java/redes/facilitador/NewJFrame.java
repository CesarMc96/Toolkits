package redes.facilitador;

import java.io.BufferedWriter;
import java.io.File;
import java.io.FileOutputStream;
import java.io.FileWriter;
import java.io.IOException;
import java.io.OutputStreamWriter;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.swing.JFileChooser;
import javax.swing.JTextField;

/**
 * @author César Alejandro Montaño Cortés"
 */
public class NewJFrame extends javax.swing.JFrame {

    public NewJFrame() {
        initComponents();
        rellenarComboBox();
        this.setLocationRelativeTo(null);
    }

    private void rellenarComboBox() {
        File carpeta = new File("C:\\LRGS\\netlist");
        //System.out.println(carpeta.getName());
        File[] archivos = carpeta.listFiles();
        //System.out.println("Numero de archivos " + archivos.length);

        comboEstaciones.removeAllItems();
        for (File archivo : archivos) {
            //System.out.println(archivo.getName());
            comboEstaciones.addItem(archivo.getName());
        }
    }

    private void elegirArchivo(JTextField nombre) {
        JFileChooser fileChooser = new JFileChooser();
        fileChooser.setFileSelectionMode(JFileChooser.FILES_AND_DIRECTORIES);

        int result = fileChooser.showOpenDialog(this);

        if (result != JFileChooser.CANCEL_OPTION) {
            File fileName = fileChooser.getSelectedFile();

            if ((fileName == null) || (fileName.getName().equals(""))) {
                nombre.setText("...");
            } else {
                String archivo = fileName.getAbsolutePath();
                int replace = archivo.length() - archivo.replace("\\", "").length();
                archivo = archivo.replace("\\", "-");
                String[] parts = archivo.split("-");
                nombre.setText(parts[replace]);
            }
        }
    }

    private void elegirCarpeta(JTextField nombre) {
        JFileChooser fileChooser = new JFileChooser();
        fileChooser.setFileSelectionMode(JFileChooser.DIRECTORIES_ONLY);

        int result = fileChooser.showOpenDialog(this);

        if (result != JFileChooser.CANCEL_OPTION) {
            File fileName = fileChooser.getSelectedFile();

            if ((fileName == null) || (fileName.getName().equals(""))) {
                nombre.setText("...");
            } else {
                nombre.setText(fileName.getAbsolutePath());
                rutaCarpeta = fileName.getAbsolutePath();
                String nombreFinal = "Archivo Final: " + rutaCarpeta + "/deswall_lrg19032024-1230.log";
                lblNombreFinal.setText(nombreFinal);
            }
        }
    }

    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        pnlPrincipal = new javax.swing.JPanel();
        pnlGeneral = new javax.swing.JPanel();
        lblNombre = new javax.swing.JLabel();
        txtNombre = new javax.swing.JTextField();
        pnlInformacion = new javax.swing.JPanel();
        lblArchivo = new javax.swing.JLabel();
        txtArchivo = new javax.swing.JTextField();
        btnArchivo = new javax.swing.JButton();
        lblUbicacion = new javax.swing.JLabel();
        txtUbicacion = new javax.swing.JTextField();
        btnUbicacion = new javax.swing.JButton();
        lblIP = new javax.swing.JLabel();
        comboIP = new javax.swing.JComboBox<>();
        lblEstaciones = new javax.swing.JLabel();
        comboEstaciones = new javax.swing.JComboBox<>();
        pnlHorario = new javax.swing.JPanel();
        lblHora = new javax.swing.JLabel();
        txtHora = new javax.swing.JTextField();
        lblMinutos = new javax.swing.JLabel();
        txtMinutos = new javax.swing.JTextField();
        lblNombreFinal = new javax.swing.JLabel();
        btnGuardar = new javax.swing.JButton();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        pnlPrincipal.setBackground(new java.awt.Color(255, 255, 255));
        pnlPrincipal.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        pnlGeneral.setBackground(new java.awt.Color(255, 255, 255));
        pnlGeneral.setBorder(javax.swing.BorderFactory.createLineBorder(new java.awt.Color(0, 0, 0)));
        pnlGeneral.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        lblNombre.setBackground(new java.awt.Color(0, 0, 0));
        lblNombre.setText("Nombre");
        pnlGeneral.add(lblNombre, new org.netbeans.lib.awtextra.AbsoluteConstraints(30, 20, -1, 20));
        pnlGeneral.add(txtNombre, new org.netbeans.lib.awtextra.AbsoluteConstraints(80, 20, 180, -1));

        pnlInformacion.setBackground(new java.awt.Color(255, 255, 255));
        pnlInformacion.setBorder(javax.swing.BorderFactory.createTitledBorder(null, "Información", javax.swing.border.TitledBorder.LEFT, javax.swing.border.TitledBorder.TOP));
        pnlInformacion.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        lblArchivo.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblArchivo.setText("Achivo");
        lblArchivo.setMaximumSize(new java.awt.Dimension(36, 22));
        lblArchivo.setMinimumSize(new java.awt.Dimension(36, 22));
        lblArchivo.setPreferredSize(new java.awt.Dimension(36, 22));
        pnlInformacion.add(lblArchivo, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 30, 40, 20));
        pnlInformacion.add(txtArchivo, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 30, 130, -1));

        btnArchivo.setText("...");
        btnArchivo.setBorder(new javax.swing.border.LineBorder(new java.awt.Color(0, 0, 0), 5, true));
        btnArchivo.setBorderPainted(false);
        btnArchivo.setMaximumSize(new java.awt.Dimension(23, 22));
        btnArchivo.setMinimumSize(new java.awt.Dimension(23, 22));
        btnArchivo.setPreferredSize(new java.awt.Dimension(23, 22));
        btnArchivo.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnArchivoActionPerformed(evt);
            }
        });
        pnlInformacion.add(btnArchivo, new org.netbeans.lib.awtextra.AbsoluteConstraints(200, 30, 40, -1));

        lblUbicacion.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblUbicacion.setText("Ubicación");
        lblUbicacion.setMaximumSize(new java.awt.Dimension(53, 22));
        lblUbicacion.setMinimumSize(new java.awt.Dimension(53, 22));
        pnlInformacion.add(lblUbicacion, new org.netbeans.lib.awtextra.AbsoluteConstraints(250, 30, 70, 20));
        pnlInformacion.add(txtUbicacion, new org.netbeans.lib.awtextra.AbsoluteConstraints(330, 30, 130, -1));
        txtUbicacion.getAccessibleContext().setAccessibleParent(pnlInformacion);

        btnUbicacion.setText("...");
        btnUbicacion.setMaximumSize(new java.awt.Dimension(23, 22));
        btnUbicacion.setMinimumSize(new java.awt.Dimension(23, 22));
        btnUbicacion.setPreferredSize(new java.awt.Dimension(23, 22));
        btnUbicacion.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnUbicacionActionPerformed(evt);
            }
        });
        pnlInformacion.add(btnUbicacion, new org.netbeans.lib.awtextra.AbsoluteConstraints(460, 30, 40, -1));
        btnUbicacion.getAccessibleContext().setAccessibleParent(pnlInformacion);

        lblIP.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblIP.setText("IP");
        lblIP.setMaximumSize(new java.awt.Dimension(36, 22));
        lblIP.setMinimumSize(new java.awt.Dimension(36, 22));
        lblIP.setPreferredSize(new java.awt.Dimension(36, 22));
        pnlInformacion.add(lblIP, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 70, 40, 20));

        comboIP.setBackground(new java.awt.Color(255, 255, 255));
        comboIP.setModel(new javax.swing.DefaultComboBoxModel<>(new String[] { "lrgseddn3.cr.usgs.gov", "lrgseddn2.cr.usgs.gov", "lrgseddn1.cr.usgs.gov" }));
        pnlInformacion.add(comboIP, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 70, 170, -1));

        lblEstaciones.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblEstaciones.setText("Estaciones");
        lblEstaciones.setMaximumSize(new java.awt.Dimension(53, 22));
        lblEstaciones.setMinimumSize(new java.awt.Dimension(53, 22));
        pnlInformacion.add(lblEstaciones, new org.netbeans.lib.awtextra.AbsoluteConstraints(250, 70, 70, 20));

        comboEstaciones.setBackground(new java.awt.Color(255, 255, 255));
        pnlInformacion.add(comboEstaciones, new org.netbeans.lib.awtextra.AbsoluteConstraints(330, 70, 170, -1));

        pnlGeneral.add(pnlInformacion, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 50, 530, 110));

        pnlHorario.setBackground(new java.awt.Color(255, 255, 255));
        pnlHorario.setBorder(javax.swing.BorderFactory.createTitledBorder("Horario"));
        pnlHorario.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        lblHora.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblHora.setText("Hora");
        lblHora.setMaximumSize(new java.awt.Dimension(26, 22));
        lblHora.setMinimumSize(new java.awt.Dimension(26, 22));
        lblHora.setPreferredSize(new java.awt.Dimension(26, 22));
        pnlHorario.add(lblHora, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 30, 40, -1));
        pnlHorario.add(txtHora, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 30, 170, -1));

        lblMinutos.setHorizontalAlignment(javax.swing.SwingConstants.CENTER);
        lblMinutos.setText("Minutos");
        lblMinutos.setMaximumSize(new java.awt.Dimension(42, 22));
        lblMinutos.setMinimumSize(new java.awt.Dimension(42, 22));
        lblMinutos.setPreferredSize(new java.awt.Dimension(42, 22));
        pnlHorario.add(lblMinutos, new org.netbeans.lib.awtextra.AbsoluteConstraints(260, 30, 60, -1));
        pnlHorario.add(txtMinutos, new org.netbeans.lib.awtextra.AbsoluteConstraints(330, 30, 170, -1));

        pnlGeneral.add(pnlHorario, new org.netbeans.lib.awtextra.AbsoluteConstraints(20, 170, 530, 70));

        lblNombreFinal.setText("Archivo Final: ");
        pnlGeneral.add(lblNombreFinal, new org.netbeans.lib.awtextra.AbsoluteConstraints(30, 260, -1, -1));

        btnGuardar.setText("Guardar");
        btnGuardar.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                btnGuardarActionPerformed(evt);
            }
        });
        pnlGeneral.add(btnGuardar, new org.netbeans.lib.awtextra.AbsoluteConstraints(480, 290, -1, -1));

        pnlPrincipal.add(pnlGeneral, new org.netbeans.lib.awtextra.AbsoluteConstraints(40, 50, 570, 330));

        getContentPane().add(pnlPrincipal, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 650, 410));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void btnArchivoActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnArchivoActionPerformed
        elegirArchivo(txtArchivo);
    }//GEN-LAST:event_btnArchivoActionPerformed

    private void btnUbicacionActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnUbicacionActionPerformed
        elegirCarpeta(txtUbicacion);
    }//GEN-LAST:event_btnUbicacionActionPerformed

    private void btnGuardarActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_btnGuardarActionPerformed
        String nombreA = "C:\\Users\\Cesar\\Documents\\NetBeansProjects\\Tareas\\"+ txtNombre.getText() + ".bat";
        System.out.println(nombreA);

        try {
            File nuevoArchivo = new File(nombreA);

            if (!nuevoArchivo.exists()) {
                nuevoArchivo.createNewFile();
            }

            System.out.println("Fichero " + nuevoArchivo.getName() + " creado");

            FileOutputStream escribirArchivo = new FileOutputStream(nombreA);
            BufferedWriter buffered = new BufferedWriter(new OutputStreamWriter(escribirArchivo));
            buffered.newLine();
            buffered.write("CHDIR C:\\LRGS\\bin.");
            buffered.newLine();
            buffered.write("SET YY=%DATE:~-4%");
            buffered.newLine();
            buffered.write("SET MM=%DATE:~-7,2%");
            buffered.newLine();
            buffered.write("SET DD=%DATE:~-10,2%");
            buffered.newLine();
            buffered.write("SET HH=%TIME:~-11,2%");
            buffered.newLine();
            buffered.write("SET MIN=%TIME:~-8,2%");
            buffered.newLine();
            buffered.write("set nombreCompleto=deswall_lrg%DD%%MM%%YY%-%HH%%MIN%.log");
            buffered.newLine();
            buffered.write("getDcMessage -h lrgseddn3.cr.usgs.gov -u mexnms -f " + txtArchivo.getText() + " 1>" + rutaCarpeta + "\\%nombreCompleto%");
            buffered.close();

        } catch (IOException ex) {
            Logger.getLogger(NewJFrame.class.getName()).log(Level.SEVERE, null, ex);
        }
    }//GEN-LAST:event_btnGuardarActionPerformed

    private String rutaCarpeta;
    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnArchivo;
    private javax.swing.JButton btnGuardar;
    private javax.swing.JButton btnUbicacion;
    private javax.swing.JComboBox<String> comboEstaciones;
    private javax.swing.JComboBox<String> comboIP;
    private javax.swing.JLabel lblArchivo;
    private javax.swing.JLabel lblEstaciones;
    private javax.swing.JLabel lblHora;
    private javax.swing.JLabel lblIP;
    private javax.swing.JLabel lblMinutos;
    private javax.swing.JLabel lblNombre;
    private javax.swing.JLabel lblNombreFinal;
    private javax.swing.JLabel lblUbicacion;
    private javax.swing.JPanel pnlGeneral;
    private javax.swing.JPanel pnlHorario;
    private javax.swing.JPanel pnlInformacion;
    private javax.swing.JPanel pnlPrincipal;
    private javax.swing.JTextField txtArchivo;
    private javax.swing.JTextField txtHora;
    private javax.swing.JTextField txtMinutos;
    private javax.swing.JTextField txtNombre;
    private javax.swing.JTextField txtUbicacion;
    // End of variables declaration//GEN-END:variables
}
